import React, { Component } from 'react';
import { withStyles } from 'material-ui/styles';
import Typography from 'material-ui/Typography';
import IconButton from 'material-ui/IconButton';
import PlayArrow from 'material-ui-icons/PlayArrow';
import Pause from 'material-ui-icons/Pause';
import Refresh from 'material-ui-icons/Refresh';
import Slider from 'rc-slider/lib/Slider';
import 'rc-slider/assets/index.css';
import Grid from 'material-ui/Grid';
import { grey } from 'material-ui/colors';

const styles = theme => {
	return {
		audioPlayer: {
			position: 'fixed',
			bottom: '0px',
			background: theme.primary,
			color: grey[800]
		},
		playerBtns: {
			display: 'flex',
			flexDirection: 'row',
			alignItems: 'center',
			padding: '0 10px'
		},
		// player btns
		playerBtn: {
			flex: '1'
		},
		audioInfo: {
			flex: '1',
			display: 'flex',
			flexDirection: 'row',
			alignItems: 'center',
			height: '70px',
			textAlign: 'center'
		},
		// audio info
		title: {
			fontSize: '18px',
			textAlign: 'center',
			flex: '1 1 0'
		},
		time: {
			width: '55px'
		},
		slider: {
			flex: '1',
			minWidth: '130px',
			padding: '0 10px',
			verticalAlign: 'bottom',
			display: 'inline-block'
		},
		icon: {
			width: '24px',
			height: '24px'
		},
		iconFlip: {
			'-webkit-transform': 'scaleX(-1)',
			transform: 'scaleX(-1)',
			width: '24px',
			height: '24px'
		}
	}
}

class AudioPlayer extends Component {

	progressInterval;

	constructor() {
		super();
		this.play = this.play.bind(this);
		this.pause = this.pause.bind(this);
		this.skipForward = this.skipForward.bind(this);
		this.rewindBack = this.rewindBack.bind(this);
		this.onBeforeChange = this.onBeforeChange.bind(this);
		this.onAfterChange = this.onAfterChange.bind(this);
	}

	componentDidMount() {

	}

	play() {
		this.props.play();
	}

	pause() {
		this.props.pause();
	}

	skipForward() {
		this.props.skipForward();
	}

	rewindBack() {
		this.props.rewindBack();
	}

	getProgress() {
		const progress = this.props.progress;
		const duration = this.props.duration;

		if ((!progress && !duration) || (progress && !duration)
			|| duration && !progress) {
			return 0;
		}

		let normProgress = (progress / duration) * 100;

		if (isNaN(normProgress)) {
			return 0;
		}
		else if (normProgress > 100) {
			normProgress = 100;
		}
		else if (normProgress < 0) {
			normProgress = 0;
		}

		return normProgress;
	}

	onBeforeChange(event) {
		this.props.clearProgressInterval();
	}

	onAfterChange(event) {
		this.props.monitorProgress();
	}

	setProgress(progress) {
		this.props.seekTo(progress);
	}

	formattedProgress(p) {
		if (!p) {
			p = 0;
		}
		const date = new Date(null);
		date.setSeconds(p);
		if (p < 3600) {
			return date.toISOString().substr(14, 5);
		}
		const iso = date.toISOString();

		if (iso && iso.length > 18) {
			return iso.substr(11, 8);
		}
	}

	render() {
		const cls = this.props.classes;

		const playing = this.props.playing;

		let playPauseBtn;

		if (playing) {
			playPauseBtn = (
				<IconButton
					classes={{
						icon: cls.icon
					}}
					onClick={this.pause}
					className={cls.playerBtn} aria-label="Pause">
					<Pause />
				</IconButton>
			)
		}
		else {
			playPauseBtn = (
				<IconButton
					classes={{
						icon: cls.icon
					}}
					onClick={this.play}
					className={cls.playerBtn} aria-label="Play">
					<PlayArrow />
				</IconButton>
			)
		}

		return (
			<Grid container spacing={0} className={cls.audioPlayer}>
				<Grid
					item xs={12} sm={5} md={4} lg={3} xl={2}
					className={cls.playerBtns}>

					<Typography type="title" className={cls.title}>
						An-Nahl
		        		</Typography>

					<div className={cls.slider}>
						<Slider
							onAfterChange={this.onAfterChange}
							onBeforeChange={this.onBeforeChange}
							step={.00001}
							onChange={this.setProgress.bind(this)}
							value={this.getProgress()} />
					</div>

					{playPauseBtn}

					{/* 	<IconButton
						classes={{
							icon: cls.iconFlip
						}}
						onClick={this.rewindBack}
						className={cls.playerBtn}>
						<Refresh />
					</IconButton>

					{playPauseBtn}

					<IconButton
						classes={{
							icon: cls.icon
						}}
						onClick={this.skipForward}
						className={cls.playerBtn}>
						<Refresh />
					</IconButton> */}
				</Grid>


				{/* <Grid item
					xs
					className={cls.audioInfo}>

					<Typography type="subheading" className={cls.time}>
						{this.formattedProgress(this.props.progress)}
					</Typography>

					<div className={cls.slider}>
						<Slider
							onAfterChange={this.onAfterChange}
							onBeforeChange={this.onBeforeChange}
							step={.00001}
							onChange={this.setProgress.bind(this)}
							value={this.getProgress()} />
					</div>

					<Typography type="subheading" className={cls.time}>
						{this.formattedProgress(this.props.duration)}
					</Typography>
				</Grid> */}
			</Grid>
		)
	}
}

export default withStyles(styles)(AudioPlayer);