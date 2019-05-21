import React, { Component } from 'react';
import { connect } from 'react-redux'
import { withRouter } from 'react-router'
import { firebaseConnect, getVal } from 'react-redux-firebase'
import { compose } from 'redux'
import { withStyles } from 'material-ui/styles'
import {
    getAlbumTracks, play, unsetSelectedAlbum,
    updateReciterViewCount,
    setAlbumTracks,
    setAlbumLoading
} from '../actions/'
import Tabs, { Tab } from 'material-ui/Tabs';
import { grey } from 'material-ui/colors';
import Button from 'material-ui/Button';
import IconButton from 'material-ui/IconButton';
import ShowChart from 'material-ui-icons/ShowChart';
import FileDownload from 'material-ui-icons/FileDownload';
import { CircularProgress } from 'material-ui/Progress';

const styles = theme => ({
    reciterDetailsContainer: {
        padding: '10px'
    },
    header: {
        display: 'flex',
        height: '280px',
        flexDirection: 'column',
        alignItems: 'center',
        color: grey[800]
    },
    viewCount: {
        display: 'flex',
        justifyContent: 'center',
        alignItems: 'center'
    },
    reciterImg: {
        width: '100px',
        height: 'auto',
        borderRadius: '50%',
        padding: '10px'
    },
    name: {
        textAlign: 'center'
    },
    mainColor: {
        color: grey[800]
    },
    track: {
        padding: '10px 5px',
        display: 'flex'
    },
    trackTitle: {
        cursor: 'pointer',
        ':hover': {
            filter: 'brightness(120%)'
        },
    },
    playing: {
        color: theme.palette.primary.contrastText
    }
})
class ReciterDetailsContainer extends Component {

    constructor() {
        super();
        this.getAlbumTracks = this.getAlbumTracks.bind(this);
        window.scrollTo(0, 0);
    }

    componentWillReceiveProps(nextProps) {
        if (nextProps.reciterDetails) {

            const reciterDetails = nextProps.reciterDetails;
            const reciterId = reciterDetails.info.id;

            if (!nextProps.viewCounts[reciterId]) {
                this.props.updateReciterViewCount(reciterId);
            }

            
            if(reciterDetails && reciterDetails.info){
                let t = document.title.split(' - ');
                let originalTitle = '';
                if(t.length > 1){
                    originalTitle = t[1];
                }
                else{
                    originalTitle = t[0];
                }
                document.title = reciterDetails.info.fullName + ' - ' + originalTitle;
            }

            const albums = reciterDetails.albums;

            let albumKeys = this.getAlbumKeys(albums);

            if (
                (
                    !nextProps.selectedAlbum
                    || (
                        nextProps.selectedAlbum.reciter &&
                        nextProps.selectedAlbum.reciter.id !== reciterId
                    )
                )
                && albums
                && albumKeys.length > 0
            ) {
                this.getAlbumTracks(albumKeys[0], 0, reciterDetails, nextProps.albumLoading);
            }
        }
    }

    componentWillUnmount() {
        this.props.unsetSelectedAlbum();
    }

    getAlbumTracks(albumId, id, reciterDetails, albumLoading) {

        if (albumLoading) {
            return;
        }

        const album = reciterDetails.albums[albumId];
        let albumIdent = album.identifier;
        if (albumIdent) {
            albumId = albumIdent;
        }
        const reciterInfo = reciterDetails ? reciterDetails.info : this.props.reciterDetails.info;
        const details = { reciterInfo: reciterInfo, albumId: albumId, id: id };

        if (this.props.albumTracks[albumId]) {
            this.props.setAlbumTracks(details);
            return;
        }

        this.props.getAlbumTracks(details);
    }

    handleChange() {

    }

    playTrack(track) {
        const selectedAlbum = this.props.selectedAlbum || { id: 0 };
        const title = this.getTitle(track);
        this.props.play({
            ...track,
            trackId: track.id,
            albumId: selectedAlbum.albumId,
            title: title
        });
    }

    getTitle(track) {
        let title = track.title;
        if (!title) {
            title = track.id;
            title = title.replace('.mp3', '');
            title = title.replace('/', '');
        }
        return title;
    }

    /**
     * 
     * @param {Object} albums 
     */
    getAlbumKeys(albums) {
        let k = [];
        if (albums) {
            k = Object.keys(albums);
            k.sort((a, b) => {
                let aOrder = albums[a].albumOrder;
                let bOrder = albums[b].albumOrder;
                return bOrder - aOrder;
            })
        }
        return k;
    }

    downloadTrack(track) {
        const selectedAlbum = this.props.selectedAlbum || { id: 0 };
        window.open(`https://archive.org/download/${selectedAlbum.albumId}${track.id}`, '_BLANK');
    }

    render() {

        const classes = this.props.classes;

        const reciterDetails = this.props.reciterDetails;

        let displayInfo = (<h2 style={{ padding: '15px', margin: 0 }}>Loading...</h2>)

        if (reciterDetails === null) {
            displayInfo = (<h2 style={{ padding: '15px', margin: 0 }}>
                Reciter Not Found.
                <br /><br />
                <Button
                    color="secondary"
                    onClick={() => { this.props.history.push('/') }}
                    className={classes.button}>
                    All Reciters
                </Button>
            </h2>);
        }

        if (reciterDetails) {

            const reciterId = reciterDetails.info.id;
            const reciterName = reciterDetails.info.fullName;
            const selectedAlbum = this.props.selectedAlbum || { id: 0 };
            const tracks = this.props.albumTracks[selectedAlbum.albumId] || [];
            const reciterImage = '/assets/img/reciters/' + reciterId + '.jpg';

            const playingId = this.props.nowPlaying ? this.props.nowPlaying.id : undefined;

            let viewCount = (<span />);

            if (this.props.viewCounts[reciterId]) {
                viewCount = (<h4 className={classes.viewCount}>
                    <ShowChart /> {this.props.viewCounts[reciterId]}
                </h4>)
            }

            let albumLoading = (<span />);

            if (this.props.albumLoading) {
                albumLoading = (
                    <CircularProgress color="secondary" value={0} />
                );
            }

            displayInfo = (
                <div className={classes.reciterDetailsContainer}>

                    <div className={classes.header}>
                        <img className={classes.reciterImg}
                            src={reciterImage} alt={reciterName} />
                        <div className={classes.name}>
                            <h3>{reciterName}</h3>
                            <h4>{reciterDetails.info.arabic}</h4>
                            {viewCount}
                        </div>
                    </div>

                    <div className={classes.albums}>
                        {albumLoading}
                        <Tabs
                            scrollable
                            scrollButtons="on"
                            indicatorColor="primary"
                            textColor="primary"
                            value={selectedAlbum.id} onChange={this.handleChange}>


                            {

                                this.getAlbumKeys(reciterDetails.albums).map((albumId, id) => {
                                    const album = reciterDetails.albums[albumId];
                                    return (
                                        < Tab
                                            classes={{
                                                textColorPrimarySelected: classes.mainColor,
                                                textColorSecondarySelected: classes.mainColor
                                            }}
                                            onClick={() => { this.getAlbumTracks(albumId, id, reciterDetails) }}
                                            key={id} label={album.albumTitle} />
                                    )
                                })
                            }
                        </Tabs>
                        <div>
                            <ol>
                                {
                                    tracks.map((track, id) => {
                                        const cl = [
                                            classes.track,
                                            (track.id === playingId ? classes.playing : '')
                                        ];
                                        return (
                                            <li
                                                className={cl.join(' ')}
                                                key={id} >
                                                <div
                                                    className={classes.trackTitle}
                                                    onClick={() => { this.playTrack(track) }}>
                                                    {id + 1}. {this.getTitle(track)}
                                                </div>
                                                <span style={{ flex: 1 }}></span>
                                                <IconButton
                                                    onClick={() => { this.downloadTrack(track) }}
                                                    style={{ height: '100%' }}>
                                                    <FileDownload />
                                                </IconButton>

                                            </li>
                                        )
                                    })
                                }
                            </ol>
                            {/* 
                            <pre>{JSON.stringify(this.props.selectedAlbum)}</pre> */}
                        </div>
                    </div>
                </div >
            );
        }

        return (
            <div>
                {displayInfo}
            </div>
        )
    }
}


const mapStateToProps = (state, ownProps) => {
    const id = ownProps.match.params.reciterId;
    getVal(state.firebase, `reciter/${id}`, null);
    let reciterDetails = undefined;
    const reciterInfo = state.firebase.data.reciter;
    if (reciterInfo) {
        reciterDetails = reciterInfo[id];
        // reciter end point gotten, but reciter not there
        if (!reciterDetails) {
            reciterDetails = null;
        }
    }
    return {
        reciterDetails: reciterDetails,
        // reciterImages: state.RecitersReducer.reciterImages,
        albumTracks: state.RecitersReducer.albumTracks,
        selectedAlbum: state.RecitersReducer.selectedAlbum,
        nowPlaying: state.AudioPlayer.nowPlaying,
        viewCounts: state.RecitersReducer.viewCounts,
        albumLoading: state.RecitersReducer.albumLoading
    }
}

const mapDispatchToProps = {
    /* setReciterImage(reciterId) {
        return (dispatch) => {
            dispatch(setReciterImage(reciterId));
        }
    }, */
    getAlbumTracks(details) {
        return (dispatch) => {
            dispatch(getAlbumTracks(details))
        }
    },
    play(obj) {
        return (dispatch) => {
            dispatch(play(obj))
        }
    },
    unsetSelectedAlbum() {
        return (dispatch) => {
            dispatch(unsetSelectedAlbum());
        }
    },
    updateReciterViewCount(reciterId) {
        return (dispatch) => {
            dispatch(updateReciterViewCount(reciterId));
        }
    },
    setAlbumLoading(albumId) {
        return (dispatch) => {
            dispatch(setAlbumLoading(albumId));
        }
    },
    setAlbumTracks(details) {
        return (dispatch) => {
            dispatch(setAlbumTracks(details));
        }
    }
}

export default
    withRouter(
        compose(
            firebaseConnect((props) => {
                return ['reciter/' + props.match.params.reciterId]
            }),
            connect(mapStateToProps, mapDispatchToProps),
            withStyles(styles)
        )(ReciterDetailsContainer)
    )