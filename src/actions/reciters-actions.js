import http from 'axios';
import { API_URL, RECITERS_ACTION_TYPES } from '../config'

export function fetchReciters(name) {
	let url = API_URL + '/reciters-list'

    /**
     * TODO
	 * // we should filter in backend
     * if(name){
     *  url += `?name=${name}`
     * }
     */

	const typePrefix = 'RECITERS_';
	return async (dispatch) => {
		try {
			const res = await http.get(url);

			let list = res.data;

			if (name) {
				list = list.filter(obj => {
					return obj.name.toLowerCase()
						.indexOf(name.toLowerCase()) !== -1;
				})
			}

			const action = RECITERS_ACTION_TYPES.RECITERS_COMPLETE;

			dispatch({ type: action, data: list })

		} catch (err) {
			dispatch({ 
				type: RECITERS_ACTION_TYPES.RECITERS_REJECTED, 
				data: err 
			})
		}
	}
}