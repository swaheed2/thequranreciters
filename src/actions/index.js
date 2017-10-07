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
export function reduceList(word) {
	return(dispatch) => {
		axios
		.get('http://thequranreciters.com/database/reciters-list')
		.then((response) => {
			const newArray = response.data.filter(obj => {
				return obj.name.toLowerCase().includes(word)
			})
			dispatch(showReciters(newArray))
		})
	}
}