import axios from 'axios'
import { fetchReciters } from '../config/development.g'

export const showReciters = (list) => ({
  type: 'SHOW_RECITERS',
  data: list
})

export function fetchAllReciters() {
	return(dispatch) => {
		axios
		.get(fetchReciters)
		.then((response) => {
			dispatch(showReciters(response.data))
		})
	}
}
export function reduceList(word) {
	return(dispatch) => {
		axios
		.get(fetchReciters)
		.then((response) => {
			const newArray = response.data.filter(obj => {
				return obj.name.toLowerCase().includes(word)
			})
			dispatch(showReciters(newArray))
		})
	}
}