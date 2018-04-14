export function toggleDrawer(open) {
    return (dispatch) => {
        dispatch({ type: 'TOGGLE_DRAWER', data: open });
    }
}