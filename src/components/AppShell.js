import React from 'react'
import { AppBar } from '../components';
import { withStyles } from 'material-ui/styles';
import { blueGrey } from 'material-ui/colors';
import { AudioPlayer } from '../containers';

const styles = theme => ({
    spacer: {
        height: '100px'
    },
    bodyDiv: {
        background: blueGrey[50],
        minHeight: 'calc(100vh - 50px)'
    }
})

class AppShell extends React.Component {
    render() {
        return (
            <div>
                <AppBar />
                <div className={this.props.classes.bodyDiv}>{this.props.children}</div>
                <AudioPlayer />
            </div>
        )
    }
}
export default withStyles(styles)(AppShell)