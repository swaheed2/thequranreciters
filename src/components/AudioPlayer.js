import React, { Component } from 'react';
import { withStyles } from 'material-ui/styles';
import Typography from 'material-ui/Typography';
import IconButton from 'material-ui/IconButton';
import PlayArrow from 'material-ui-icons/PlayArrow';
import Pause from 'material-ui-icons/Pause';
import Slider from 'rc-slider/lib/Slider';
import 'rc-slider/assets/index.css';
import Grid from 'material-ui/Grid';
import { grey } from 'material-ui/colors';
import Refresh from 'material-ui-icons/Refresh';
import { contrastText } from '../config/theme'
import Button from 'material-ui/Button';

const styles = theme => {
	return {
		audioPlayer: {
			position: 'fixed',
			bottom: '0px',
			background: theme.palette.primary.light,
			color: grey[800],
			width: '100%'
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
			textAlign: 'center',
			flex: '1 1 0',
			overflow: 'hidden',
			padding: '5px'
		},
		time: {
			width: '55px',
			fontSize: '16px',
			'@media all and (max-width: 500px)': {
				fontSize: '12px',
				width: '15px',
				padding: '5px'
			}
		},
		slider: {
			marginTop: '-8px',
			height: '5px'
		},
		icon: {
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
			|| (duration && !progress)) {
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

		let iso = undefined;

		if (p < 3600) {
			iso = date.toISOString();

			if (iso.substr(14, 1) == '0') {
				return iso.substr(15, 4);
			}
			else {
				return iso.substr(14, 5);
			}
		}


		try {
			iso = date.toISOString();
		} catch (err) {
			//console.error('p was ', p, err);
		}

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
						root: cls.icon
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
						root: cls.icon
					}}
					onClick={this.play}
					className={cls.playerBtn} aria-label="Play">
					<PlayArrow />
				</IconButton>
			)
		}

		let audioPlayerInfo = (<span></span>);

		let nowPlaying = this.props.nowPlaying;

		if (nowPlaying) {
			audioPlayerInfo = (
				<div className={cls.audioPlayer}>
					<div className={cls.slider}>
						<Slider
							railStyle={{ background: contrastText }}
							onAfterChange={this.onAfterChange}
							onBeforeChange={this.onBeforeChange}
							step={.00001}
							onChange={this.setProgress.bind(this)}
							value={this.getProgress()} />
					</div>

					<Grid container spacing={0}>
						<Grid
							item xs={12}
							className={cls.playerBtns}>

							<Typography variant="caption" className={cls.title}>
								{nowPlaying.title}
							</Typography>

							<Typography
								align="center"
								variant="body1" className={cls.time}>
								{this.formattedProgress(this.props.progress)}
							</Typography>


							<IconButton
								classes={{
									root: cls.iconFlip
								}}
								onClick={this.rewindBack}
								className={`${cls.playerBtn}`}>
								<Refresh />
							</IconButton>

							{playPauseBtn}


							<IconButton
								classes={{
									root: cls.icon
								}}
								onClick={this.skipForward}
								className={cls.playerBtn}>
								<Refresh />
							</IconButton>


							<div style={{ display: 'flex', justifyContent: 'center', alignItems: 'center' }}>
								<IconButton
									onClick={() => {
										let r = this.props.rate + .25;
										if (r > 2) {
											r = .5;
										}
										this.props.updateRate(r);
									}}
									color="secondary"
									className={cls.time}>
									{this.props.rate}x
								</IconButton>

								<Typography
									align="center"
									variant="body1" className={cls.time}>
									{this.formattedProgress(this.props.duration)}
								</Typography>
							</div>
						</Grid>
					</Grid>
				</div>
			)
		}

		return (
			audioPlayerInfo
		)
	}
}

export default withStyles(styles)(AudioPlayer);