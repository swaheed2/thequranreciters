import React, { Component, useEffect, useRef } from "react";
import Button from "@material-ui/core/Button";
import Dialog from "@material-ui/core/Dialog";
import DialogActions from "@material-ui/core/DialogActions";
import DialogContent from "@material-ui/core/DialogContent";
import DialogContentText from "@material-ui/core/DialogContentText";
import DialogTitle from "@material-ui/core/DialogTitle";
import Slide from "@material-ui/core/Slide";
import { connect } from "react-redux";
import { play, setShareDialogTrackDetails } from "../actions";

const styles = (theme) => ({});

const Transition = React.forwardRef(function Transition(props, ref) {
    return <Slide direction="up" ref={ref} {...props} />;
});

const ShareAudioDialog = (props) => {
    const [open, setOpen] = React.useState(false);

    const handleClickOpen = () => {
        setOpen(true);
    };

    const handleClose = () => {
        setOpen(false);
    };

    const playTrack = () => {
		props.play(props.shareDialogTrackDetails);
		handleClose();
    };

    useEffect(() => {
        const shareDialogTrackDetails = props.shareDialogTrackDetails;

        if (!shareDialogTrackDetails.done) {
            let search = new URLSearchParams(window.location.search);
            if (search.get("albumId") && search.get("trackId")) {
                handleClickOpen();
				const track = {
                	trackId: search.get("trackId"),
                	title: search.get("title"),
                	albumId: search.get("albumId")
                };
				props.setShareDialogTrackDetails({ done: true, ...track });
            }
			else {
				props.setShareDialogTrackDetails({ done: true });
			}
        }
    });

    return (
        <div>
            <Dialog
                open={open}
                TransitionComponent={Transition}
                keepMounted
                onClose={handleClose}
                aria-labelledby="alert-dialog-slide-title"
                aria-describedby="alert-dialog-slide-description"
            >
                <DialogTitle id="alert-dialog-slide-title">{props.shareDialogTrackDetails.title}</DialogTitle>
                <DialogContent>
                    <DialogContentText id="alert-dialog-slide-description">Album: {props.shareDialogTrackDetails.albumId}</DialogContentText>
					<Button onClick={playTrack} color="secondary">
                        Play
                    </Button>
				</DialogContent>
                <DialogActions>
                   
                </DialogActions>
            </Dialog>
        </div>
    );
}

function mapStateToProps(state) {
    return { shareDialogTrackDetails: state.RecitersReducer.shareDialogTrackDetails };
}

const mapDispatchToProps = {
    play(obj) {
        return (dispatch) => {
            dispatch(play(obj));
        };
    },
    setShareDialogTrackDetails(obj) {
        return (dispatch) => {
            dispatch(setShareDialogTrackDetails(obj));
        };
    },
};

export default connect(mapStateToProps, mapDispatchToProps)(ShareAudioDialog);
