import React from 'react'
import { connect } from 'react-redux'
import AppBar from '@material-ui/core/AppBar';
import { withStyles } from '@material-ui/styles';
import grey from '@material-ui/core/colors/grey';
import Toolbar from '@material-ui/core/Toolbar';
import Typography from '@material-ui/core/Typography';
import IconButton from '@material-ui/core/IconButton';
import MenuIcon from "@material-ui/icons/Menu";
import { withRouter } from 'react-router'
import Drawer from '@material-ui/core/Drawer';
import List from '@material-ui/core/List';
import ListItem from '@material-ui/core/ListItem';
import ListItemIcon from '@material-ui/core/ListItemIcon';
import ListItemText from '@material-ui/core/ListItemText';
import MailIcon from '@material-ui/icons/Mail';
import HomeIcon from '@material-ui/icons/Home';
import { toggleDrawer } from '../actions'

const styles = theme => ({
    menuButton: {
        marginLeft: -12,
        marginRight: 20,
    },
    root: {
        flexGrow: 1,
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
        fontSize: '16px',
        fontWeight: "bold",
        color: theme.palette.primary.contrastText
    },
    drawerBody: {
        padding: '10px'
    },
    tqrAd: {
        minWidth: '100px',
        minHeight: '40px'
    }
})

class MyAppBar extends React.Component {

    constructor() {
        super();
        this.toHome = this.toHome.bind(this);
        this.to = this.to.bind(this);
    }

    toHome(toggle) {
        this.props.history.push('/');
        if (toggle) {
            this.toggleDrawer();
        }
    }

    to(route){
        this.props.history.push(route);
        this.toggleDrawer(); 
    }

    toggleDrawer(open) {
        this.props.toggleDrawer(open);
    };

    componentDidMount() {
        if (window.innerWidth > 500) {
           /*  let div = document.getElementById('tqr-ad');
            let tag = document.createElement('script');
            tag.setAttribute('async', 'true');
            tag.setAttribute('src', '//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js')
            div.appendChild(tag);
            let ins = document.createElement('ins');
            ins.setAttribute('class', 'adsbygoogle');
            ins.setAttribute('style', 'display:inline-block;width:100%;height:100%');
            ins.setAttribute('data-ad-client', 'ca-pub-9126659759556489');
            ins.setAttribute('data-ad-slot', '7700454601');
            div.appendChild(ins);
            // @ts-ignore
            (window.adsbygoogle || []).push({}); */
        }
    }

    render() {
        const { classes } = this.props;
        return <div className={classes.root}>

            <Drawer
                onClose={() => { this.toggleDrawer(false) }}
                open={this.props.drawerOpen}>

                <div className={this.props.classes.drawerBody}>
                    <Typography
                        variant="h1"
                        onClick={() => { this.toHome(true) }}
                        className={`${classes.flex} ${classes.title}`}>
                        The Quran Reciters
                    </Typography>
                    <List>
                        <ListItem button onClick={this.toHome}>
                            <ListItemIcon>
                                <HomeIcon />
                            </ListItemIcon>
                            <ListItemText primary="Reciters" />
                        </ListItem>
                        <ListItem button onClick={()=>{
                            this.to('/recite');
                        }} >
                            <ListItemIcon>
                                <MailIcon />
                            </ListItemIcon>
                            <ListItemText primary="Recite" />
                        </ListItem>
                        <ListItem button onClick={()=>{
                            this.to('/contact');
                        }} >
                            <ListItemIcon>
                                <MailIcon />
                            </ListItemIcon>
                            <ListItemText primary="Contact" />
                        </ListItem>
                    </List>
                </div>

            </Drawer>
            <div className={classes.root}>
                <AppBar position="static">
                    <Toolbar>
                        <IconButton
                            onClick={() => { this.toggleDrawer() }}
                            className={classes.menuButton + ' ' + classes.white}
                            aria-label="Menu">
                            <MenuIcon />
                        </IconButton>
                        <Typography
                            variant="h2"
                            onClick={() => { this.toHome() }}
                            className={`${classes.flex} ${classes.title}`}>
                            The Quran Reciters
                        </Typography>
                        {/* <div className={classes.tqrAd} id="tqr-ad">
                        </div> */}
                    </Toolbar>
                </AppBar>
            </div>
        </div >
    }
}

const mapStateToProps = (state) => {
    return {
        drawerOpen: state.AppReducer.drawerOpen
    }
}

const mapDispatchToProps = {
    toggleDrawer: (open) => {
        return (dispatch) => {
            dispatch(toggleDrawer());
        }
    }
}

export default withRouter(connect(mapStateToProps, mapDispatchToProps)(withStyles(styles)(MyAppBar)))