import React, { Component } from 'react'
import AppBar from 'material-ui/AppBar';
import { withStyles } from 'material-ui/styles';
import Toolbar from 'material-ui/Toolbar';
import Typography from 'material-ui/Typography';
import IconButton from 'material-ui/IconButton';
import MenuIcon from 'material-ui-icons/Menu';
import Button from 'material-ui/Button';

const styles = theme => ({
    menuButton: {
        marginLeft: -12,
        marginRight: 20,
    },
    flex: {
        flex: 1,
    }
})

class MyAppBar extends React.Component {
    render() {
        const { classes } = this.props;
        return <div className={classes.root}>
            <AppBar position="static" color='white'>
                <Toolbar>
                    <IconButton className={classes.menuButton} color="black" aria-label="Menu">
                        <MenuIcon />
                    </IconButton>
                    <Typography type="title" color="black" className={classes.flex}>
                        The Quran Reciters
                </Typography>
                </Toolbar>
            </AppBar>
        </div>
    }
}
export default withStyles(styles)(MyAppBar)