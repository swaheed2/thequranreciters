import { connect } from 'react-redux'
import AudioPlayer from '../components/AudioPlayer'
import {
	pause,
	seekTo, clearProgressInterval,
	monitorProgress, rewindBack, skipForward, updateRate, play
} from '../actions/'

const mapStateToProps = (state) => {
	return {
		playing: state.AudioPlayer.playing,
		progress: state.AudioPlayer.progress,
		duration: state.AudioPlayer.duration,
		nowPlaying: state.AudioPlayer.nowPlaying,
		rate: state.AudioPlayer.rate
	}
}

const mapDispatchToProps = {
	play: () => {
		return (dispatch) => {
			// play from nowPlaying
			dispatch(play());
		}
	},
	pause: () => {
		return (dispatch) => {
			dispatch(pause())
		}
	},
	skipForward: () => {
		return (dispatch) => {
			dispatch(skipForward())
		}
	},
	rewindBack: () => {
		return (dispatch) => {
			dispatch(rewindBack())
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
	},
	/**
	 * @param {number} rate
	 */
	updateRate: (rate) => {
		return (dispatch) => {
			dispatch(updateRate(rate));
		}
	}
}

export default connect(mapStateToProps, mapDispatchToProps)(AudioPlayer)