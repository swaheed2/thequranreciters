import axios from 'axios'

export const showReciters = (list) => ({
  type: 'SHOW_RECITERS',
  data: list
})

export function fetchAllReciters() {
	return(dispatch) => {
		axios
		.get('http://thequranreciters.com/database/reciters-list')
		.then((response) => {
			dispatch(showReciters(response.data))
		})
	}
}