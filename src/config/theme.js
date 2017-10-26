
import { createMuiTheme } from 'material-ui/styles';
import { teal, green, red, grey } from 'material-ui/colors';

export const theme = createMuiTheme({
    palette: {
        primary: teal,
        secondary: green,
        error: red
    },
    primary: teal[800],
    light: grey[200]
});