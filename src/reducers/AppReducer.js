const initialState = {
    drawerOpen: false
}

const AppReducer = (state = initialState, action) => {

    const newState = { ...state };

    switch (action.type) {
        case 'TOGGLE_DRAWER':
            newState.drawerOpen = action.data != null?
                action.data :
                (!newState.drawerOpen);
            break;
        default:
            break;
    }
    return newState;
}

export default AppReducer

