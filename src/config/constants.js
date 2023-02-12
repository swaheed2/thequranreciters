export const ACTION_TYPE = {
    COMPLETE: 'COMPLETE',
    REJECTED: 'REJECTED',
    LOADING: 'LOADING'
}

export const RECITER = {
    UPDATED_VIEW_COUNT: 'UPDATED_VIEW_COUNT',
    TOP: 'TOP_RECITERS'
}

export const RECITERS_ACTION_TYPES = {
    RECITERS_COMPLETE: 'RECITERS_' + ACTION_TYPE.COMPLETE,
    RECITERS_REJECTED: 'RECITERS_' + ACTION_TYPE.REJECTED,
}

export const RECITERS_IMAGES = {
    COMPLETE: 'RECITERS_IMAGES_' + ACTION_TYPE.COMPLETE,
    REJECTED: 'RECITERS_IMAGES_' + ACTION_TYPE.REJECTED,
}
export const RECITER_IMAGE = {
    COMPLETE: 'RECITER_IMAGE_' + ACTION_TYPE.COMPLETE,
    REJECTED: 'RECITER_IMAGE_' + ACTION_TYPE.REJECTED,
}

export const TRACKS = {
    COMPLETE: 'TRACKS_' + ACTION_TYPE.COMPLETE,
    LOADING: 'TRACKS_' + ACTION_TYPE.LOADING,
    REJECTED: 'TRACKS_' + ACTION_TYPE.REJECTED,
    UNSET_SELECTED_ALBUM: 'UNSET_SELECTED_ALBUM'
}

export const SHARE_DIALOG = "SHARE_DIALOG";