import React, { Component } from 'react';
import { withStyles } from 'material-ui/styles';
import Button from 'material-ui/Button';
import Toolbar from 'material-ui/Toolbar';
import Typography from 'material-ui/Typography';
import IconButton from 'material-ui/IconButton';
import PlayArrow from 'material-ui-icons/PlayArrow';
import Pause from 'material-ui-icons/Pause';
import Slider from 'rc-slider/lib/Slider';
import 'rc-slider/assets/index.css';

const styles = theme => {
	return {
		audioPlayer: {
			position: 'fixed',
			bottom: '0',
			background: theme.primary,
			width: '100%',
			minHeight: '45px',
			color: 'white',
			padding: '10px 10px',
			display: 'flex',
			flexDirection: 'column'
		},
		playerBtns: {
			display: 'flex',
			flexDirection: 'row'
		},
		// player btns
		playerBtn: {
			flex: '1',
			color: 'white',
			flexBasis: 'auto',
			width: '30px',
			padding: '0px 10px',
			width: '100%'
		},
		audioInfo:{
			flex: '1',
			display: 'flex',
			flexDirection: 'row',
			width: '100%'
		},
		// audio info
		title: {
			color: 'white',
			margin: '0px 2%',
			flexBasis: 'auto'
		},
		time: {
			color: 'white',
			flexBasis: 'auto',
			marginRight: '20px'
		},
		slider: {
			flex: '1',
			margin: '0px 0px',
			paddingRight: '20px',
			verticalAlign: 'bottom'
		},
		icon: {
			width: '44px',
			height: '44px'
		}
	}
}

class AudioPlayer extends Component {

	progressInterval;

	constructor() {
		super();
		this.play = this.play.bind(this);
		this.pause = this.pause.bind(this);
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
		return date.toISOString().substr(11, 8);
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

			<Toolbar className={cls.audioPlayer}>

				<div className={cls.playerBtns}>


					<IconButton
						classes={{
							icon: cls.icon
						}}
						onClick={this.play}
						className={cls.playerBtn} aria-label="Play">
						<PlayArrow />
					</IconButton>

					{playPauseBtn}

					<IconButton
						classes={{
							icon: cls.icon
						}}
						onClick={this.play}
						className={cls.playerBtn} aria-label="Play">
						<PlayArrow />
					</IconButton>
				</div>

				<div className={cls.audioInfo}>
					<Typography type="title" className={cls.title}>
						An-Nahl
		        	</Typography>

					<Typography type="subheading" className={cls.time}>
						{this.formattedProgress(this.props.progress)}
					</Typography>

					<div className={cls.slider}>
						<Slider
							style={{padding:'10px 0'}}
							onAfterChange={this.onAfterChange}
							onBeforeChange={this.onBeforeChange}
							step={.00001}
							onChange={this.setProgress.bind(this)}
							value={this.getProgress()} />
					</div>

					<Typography type="subheading" className={cls.time}>
						{this.formattedProgress(this.props.duration)}
					</Typography>
				</div>

			</Toolbar>
		)
	}
}

export default withStyles(styles)(AudioPlayer);