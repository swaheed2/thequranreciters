import React, { Component } from 'react';
import { withStyles } from 'material-ui/styles';
import Button from 'material-ui/Button';
import Toolbar from 'material-ui/Toolbar';
import Typography from 'material-ui/Typography';
import IconButton from 'material-ui/IconButton';
import PlayArrow from 'material-ui-icons/PlayArrow';
import Pause from 'material-ui-icons/Pause';

const styles = theme => {
	return {
		audioPlayer: {
			position: 'fixed',
			bottom: '0',
			background: theme.primary,
			width: '100%',
			minHeight: '45px',
			color: 'white'
		},
		title: {
			color: 'white'
		},
		playerBtn: {
			color: 'white'
		}
	}
}

class AudioPlayer extends Component {

	constructor() {
		super();
	}
	componentDidMount() {

	}
	render() {
		const cls = this.props.classes;


		const playing = this.props.playing;

		let playPauseBtn;

		if (playing) {
			playPauseBtn = (
				<IconButton onClick={this.props.pause}
					className={cls.playerBtn} aria-label="Pause">
					<Pause />
				</IconButton>
			)
		}
		else {
			playPauseBtn = (
				<IconButton onClick={this.props.play}
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
			</Toolbar>
		)
	}
}

export default withStyles(styles)(AudioPlayer);