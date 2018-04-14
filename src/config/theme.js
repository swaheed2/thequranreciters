
import { createMuiTheme } from 'material-ui/styles';
import { red, grey } from 'material-ui/colors';

export const contrastText = '#D46A6A';

export const theme = createMuiTheme({
    palette: {
        primary: {
            light: grey[50],
            main: grey[50],
            dark: grey[100],
            contrastText: contrastText
        },
        secondary: {
            light: red[300],
            main: red[500],
            dark: red[700],
            contrastText: contrastText
        },
        error: red
    }
});