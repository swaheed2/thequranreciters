import { connect } from 'react-redux'
import AudioPlayer from '../components/AudioPlayer'
import { play, pause} from '../actions/'

const mapStateToProps = (state) => {
	return {
		playing: state.AudioPlayer.playing
	}
}

const mapDispatchToProps = {
	play: () => {
		return (dispatch) => {
			dispatch(play())
		}
	},
	pause: () => {
		return (dispatch) => {
			dispatch(pause())
		}
	}
}

export default connect(mapStateToProps, mapDispatchToProps)(AudioPlayer)