import React, { Component } from 'react';
import { connect } from 'react-redux'
import { withRouter } from 'react-router'
import { firebaseConnect, getVal } from 'react-redux-firebase'
import { compose } from 'redux'
import { withStyles } from 'material-ui/styles'
import { play, setReciterImage, getAlbumTracks } from '../actions/'
import Tabs, { Tab } from 'material-ui/Tabs';
import {grey} from 'material-ui/colors';

const styles = theme => ({
    reciterDetailsContainer: {
        padding: '10px'
    },
    header: {
        display: 'flex',
        height: '250px',
        flexDirection: 'column',
        alignItems: 'center',
        color: grey[200]
    },
    reciterImg: {
        width: '100px',
        height: 'auto',
        borderRadius: '50%',
        padding: '10px'
    },
    name:{
        textAlign: 'center'
    }
})
class ReciterDetailsContainer extends Component {

    constructor() {
        super();
        this.getAlbumTracks = this.getAlbumTracks.bind(this);
    }

    componentWillReceiveProps(nextProps) {
        if (nextProps.reciterDetails) {
            const reciterDetails = nextProps.reciterDetails;
            const reciterId = reciterDetails.info.id;
            if (!nextProps.reciterImages[reciterId]) {
                this.props.setReciterImage(reciterId);
            }
            const albums = reciterDetails.albums;
            if (!nextProps.selectedAlbum && albums && Object.keys(albums).length > 0) {
                this.getAlbumTracks(Object.keys(albums)[0], reciterDetails);
            }
        }
    }

    getAlbumTracks(albumId, reciterDetails) {
        const reciterInfo = reciterDetails ? reciterDetails.info : this.props.reciterDetails.info;
        this.props.getAlbumTracks(reciterInfo, albumId);
    }

    render() {

        const classes = this.props.classes;

        const reciterDetails = this.props.reciterDetails;
        let displayInfo = (<h2>Loading...</h2>)

        if (reciterDetails == null) {
            displayInfo = (<h2>'Reciter not found'</h2>);
        }

        if (reciterDetails) {
            console.log(reciterDetails);

            const reciterId = reciterDetails.info.id;
            const reciterName = reciterDetails.info.fullName;

            displayInfo = (
                <div className={classes.reciterDetailsContainer}>

                    <div className={classes.header}>
                        <img className={classes.reciterImg}
                            src={this.props.reciterImages[reciterId]} alt={reciterName} />
                        <div className={classes.name}>
                            <h3>{reciterName}</h3>
                            <h4>{reciterDetails.info.arabic}</h4>
                        </div>
                    </div>

                    <div className={classes.albums}>
                        <Tabs
                            scrollable
                            scrollButtons="on"
                            indicatorColor="primary"
                            textColor="primary"
                            value={0} onChange={this.handleChange}>

                            {
                                Object.keys(reciterDetails.albums).map((albumId, id) => {
                                    const album = reciterDetails.albums[albumId];
                                    return (
                                        <Tab onClick={() => { this.getAlbumTracks(albumId) }}
                                            key={id} label={album.albumTitle} />
                                    )
                                })
                            }
                        </Tabs>
                        <div>{/* 
                            <pre>{JSON.stringify(this.props.selectedAlbum)}</pre> */}
                        </div>
                    </div>
                </div>
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
    getVal(state.firebase, `reciter/${id}`);
    let reciterDetails = undefined;
    const reciterInfo = state.firebase.data.reciter;
    if (reciterInfo) {
        reciterDetails = reciterInfo[id];
    }
    return {
        reciterDetails: reciterDetails,
        reciterImages: state.RecitersReducer.reciterImages,
        albumTracks: state.RecitersReducer.albumTracks,
        selectedAlbum: state.RecitersReducer.selectedAlbum
    }
}

const mapDispatchToProps = {
    setReciterImage(reciterId) {
        return (dispatch) => {
            dispatch(setReciterImage(reciterId));
        }
    },
    getAlbumTracks(reciterInfo, albumId) {
        return (dispatch) => {
            dispatch(getAlbumTracks(reciterInfo, albumId))
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