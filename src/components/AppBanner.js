import React, { Component } from 'react'
import { withStyles } from '@material-ui/styles';
import SearchBar from './SearchBar'

const styles = theme => ({
    banner: {
        background: 'white',
        minHeight: '380px',
        paddingTop: '18px'
    },
    imgStyle: {
        '@media all and (max-width: 1690px )':
        {
            height: '200px',
            width: '400px'
        },
        '@media all and (max-width: 736px)':
        {
            height: '180px',
            width: '300px'
        }
    }
})

class AppBanner extends React.Component {
    render() {
        const { classes } = this.props;
        return <div className={classes.banner}>
            <div style={{ margin: 0, textAlign: 'center', height: '300px' }}>
                <img src="https://assets-1f14.kxcdn.com/images/logo-lg-w.png" className={classes.imgStyle} />
                <div style={{ fontWeight: 500, fontSize: '18px', color: 'rgb(155, 202, 196)', marginTop: '12px' }}>The Quran Reciters</div>
                <div style={{ marginTop: '32px' }}>
                    <SearchBar style={{ margin: "0 auto", width: '400px' }} onChange={this.handleChange} />
                </div>
            </div>
        </div>
    }
}
export default withStyles(styles)(AppBanner)