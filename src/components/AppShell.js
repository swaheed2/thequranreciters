import React from 'react'
import { AppBar } from '../components';
import { withStyles } from '@material-ui/styles';
import blueGrey  from '@material-ui/core/colors/blueGrey';
import { AudioPlayer } from '../containers';

const styles = theme => ({
    spacer: {
        height: '100px'
    },
    bodyDiv: {
        background: blueGrey[50],
        minHeight: 'calc(100vh - 50px)',
        paddingBottom: '50px'
    },
    msg: {
        height: '30px',
        background: blueGrey[400],
        display: 'flex',
        alignItems: 'center',
        color: 'white',
        fontSize: '10px',
        justifyContent: 'center'
    },
    disqus_thread: {
        padding: '20px'
    }
})

class AppShell extends React.Component {

    componentWillMount() {
        window['disqus_config'] = function () {
            this.page.url = window.location.href; 
            this.page.identifier = window.location.href.substr(window.location.href.lastIndexOf('/') + 1);
        };

        (function () { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://quranreciters.disqus.com/embed.js';
            s.setAttribute('data-timestamp', + new Date() + '');
            (d.head || d.body).appendChild(s);
        })();
    }

    render() {
        return (
            <div>
                <AppBar />
                <div className={this.props.classes.bodyDiv}>{this.props.children}</div>

                {<div className={this.props.classes.disqus_thread} id="disqus_thread"></div>}

                <AudioPlayer />
            </div>
        )
    }
}
export default withStyles(styles)(AppShell)