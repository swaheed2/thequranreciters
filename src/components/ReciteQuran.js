import React, { Component } from "react";
import { withRouter } from "react-router";
import Button from "material-ui/Button";

class ReciteQuran extends Component {
  start() {
    const recognition = new window.webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.interimResults = true;

    const final_transcript = "";
    recognition.lang = "ar-SA";
    recognition.start();

    setTimeout(() => {
      recognition.stop();
    }, 5000);

    recognition.onstart = function() {
      console.log("on start");
    };
    recognition.onresult = function(event) {
      console.log("on result", event);
      if (
        event.results &&
        event.results.length > 0 &&
        event.results[0] &&
        event.results[0][0]
      ) {
        document.getElementById("recitedata").value =
          event.results[0][0].transcript;
      }
    };
    recognition.onerror = function(err) {
      console.error("on error", err);
    };
    recognition.onend = function() {
      console.log("on end");
    };
  }

  render() {
    return (
      <div>
        <Button onClick={this.start.bind(this)} raised="true" color="secondary">
          Start
        </Button>

        <div
          style={{
            display: "flex",
            alignItems: "center",
            justifyContent: "center"
          }}
        >
          <textarea
            style={{ width: "90%", margin: "20px", border: "1px solid black" }}
            id="recitedata"
          />
        </div>
      </div>
    );
  }
}

export default withRouter(ReciteQuran);
