import { connect } from 'react-redux'
import AudioPlayer from '../components/AudioPlayer'
import {
	play, pause,
	seekTo, clearProgressInterval,
	monitorProgress
} from '../actions/'

const mapStateToProps = (state) => {
	return {
		playing: state.AudioPlayer.playing,
		progress: state.AudioPlayer.progress,
		duration: state.AudioPlayer.duration
	}
}

const mapDispatchToProps = {
	play: () => {
		return (dispatch) => {
			dispatch(play('https://ia800408.us.archive.org/27/items/AlaaAlmezjaji/1437-5-2_Maghreb.mp3'));
		}
	},
	pause: () => {
		return (dispatch) => {
			dispatch(pause())
		}
	},
	seekTo: (progress) => {
		return (dispatch) => {
			dispatch(seekTo(progress))
		}
	},
	clearProgressInterval: () => {
		return (dispatch) => {
			dispatch(clearProgressInterval())
		}
	},
	monitorProgress: () => {
		return (dispatch) => {
			dispatch(monitorProgress())
		}
	}
}

export default connect(mapStateToProps, mapDispatchToProps)(AudioPlayer)