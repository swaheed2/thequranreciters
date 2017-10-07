
const initialState = {
  showReciters: null
}

const HomeReducer = (state = initialState, action) => {
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

export default HomeReducer

