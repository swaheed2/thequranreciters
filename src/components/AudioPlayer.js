import React, { Component } from 'react';
import { withStyles } from 'material-ui/styles';
import Button from 'material-ui/Button';
import Toolbar from 'material-ui/Toolbar';
import Typography from 'material-ui/Typography';
import IconButton from 'material-ui/IconButton';
import PlayArrow from 'material-ui-icons/PlayArrow';
import * as Howler from 'howler';

const styles = theme => {

	console.log(theme);
	return {
		audioPlayer: {
			position: 'fixed',
			bottom: '0',
			background: theme.primary,
			width: '100%'
		}, 
		flex: {
			color: 'white'
		}
	}
}

class AudioPlayer extends Component {
	componentDidMount() {
	}
	play() {
		const sound = new Howler.Howl({
			src: ['https://archive.org/download/AlaaAlmezjaji/016.mp3'],
			html5: true
		});
		console.log('playing');
		sound.play();
	}
	render() {
		const cls = this.props.classes;
		return (

			<Toolbar className={cls.audioPlayer}>
				<IconButton onClick={this.play}
					className={cls.menuButton} aria-label="Play">
					<PlayArrow style={{color: 'white'}}/>
				</IconButton>
				<Typography type="title" className={cls.flex}>
					An-Nahl
		          </Typography>
			</Toolbar>
		)
	}
}

export default withStyles(styles)(AudioPlayer);