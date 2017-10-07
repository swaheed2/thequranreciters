
const initialState = {
  showReciters: null
}

const ReciterReducer = (state = initialState, action) => {
  switch (action.type) {
    case 'SHOW_RECITERS':
      return {
      	...state,
      	showReciters: action.data
      }

    default:
      return state
  }
}

export default ReciterReducer

