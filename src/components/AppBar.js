import React from 'react'
import AppBar from 'material-ui/AppBar';
import { withStyles } from 'material-ui/styles';
import { grey } from 'material-ui/colors';
import Toolbar from 'material-ui/Toolbar';
import Typography from 'material-ui/Typography';
import IconButton from 'material-ui/IconButton';
import MenuIcon from 'material-ui-icons/Menu';
import { withRouter } from 'react-router'

const styles = theme => ({
    menuButton: {
        marginLeft: -12,
        marginRight: 20,
    },
    flex: {
        flex: 1,
    },
    white: {
        color: grey[800]
    },
    title: {
        cursor: 'pointer',
        textTransform: 'uppercase',
        fontSize: '16px'
    }
})

class MyAppBar extends React.Component {
    constructor() {
        super();
        this.toHome = this.toHome.bind(this);
    }
    toHome() {
        this.props.history.push('/')
    }

    render() {
        const { classes } = this.props;
        return <div className={classes.root}>
            <AppBar position="static">
                <Toolbar>
                    <IconButton
                        className={classes.menuButton + ' ' + classes.white} aria-label="Menu">
                        <MenuIcon />
                    </IconButton>
                    <Typography type="title"
                        onClick={this.toHome}
                        className={`${classes.flex} ${classes.white} ${classes.title}`}>
                        The Quran Reciters
                </Typography>
                </Toolbar>
            </AppBar>
        </div>
    }
}
export default withRouter(withStyles(styles)(MyAppBar))