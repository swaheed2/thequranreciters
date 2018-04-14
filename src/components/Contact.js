import React, { Component } from 'react';
import { withRouter } from 'react-router'

class Contact extends Component {

    render() {
        return (
            <div>

                <iframe
                    title="Contact The Quran Reciters"
                    id="JotFormIFrame-32235312286145"
                    onLoad={() => { window.parent.scrollTo(0, 0) }}
                    allowTransparency="true"
                    allowFullScreen="false"
                    src="https://form.jotform.com/32235312286145"
                    frameBorder="0"
                    style={{
                        width: '100%',
                        minWidth: '100%',
                        height: '800px',
                        border: 'none'
                    }}
                    scrolling="no"
                >
                </iframe>
            </div >
        )
    }
}

export default
    withRouter(Contact)
