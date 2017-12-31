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
			display: 'flex',
			flexDirection: 'row',
			padding: '0px 10px'
		},
		title: {
			color: 'white',
			margin: '0px 15px'
		},
		time: {
			color: 'white'
		},
		playerBtn: {
			color: 'white'
		},
		slider: {
			flex: '1',
			margin: '0px 15px'
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

	formattedProgress() {
		const p = this.props.progress;
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
				<IconButton onClick={this.pause}
					className={cls.playerBtn} aria-label="Pause">
					<Pause />
				</IconButton>
			)
		}
		else {
			playPauseBtn = (
				<IconButton onClick={this.play}
					className={cls.playerBtn} aria-label="Play">
					<PlayArrow />
				</IconButton>
			)
		}

		return (

			<Toolbar className={cls.audioPlayer}>

				{playPauseBtn}

				<Typography type="title" className={cls.title}>
					An-Nahl
		        </Typography>

				<Typography type="subheading" className={cls.time}>
					{this.start()}
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
					{this.formattedProgress()}
				</Typography>

			</Toolbar>
		)
	}
}

export default withStyles(styles)(AudioPlayer);