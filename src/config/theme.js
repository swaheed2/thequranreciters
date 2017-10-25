
import { createMuiTheme } from 'material-ui/styles';
import { teal, green, red } from 'material-ui/colors';

export const theme = createMuiTheme({
    palette: {
        primary: teal,
        secondary: green,
        error: red
    },
    primary: teal[800]
});