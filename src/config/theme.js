
import { createMuiTheme } from 'material-ui/styles';
import { lightBlue, green, red, grey } from 'material-ui/colors';

const customColor = Object.assign({}, grey);

const num = 50;

export const theme = createMuiTheme({
    palette: {
        primary: Object.assign(customColor, { 500: customColor[num], 600: customColor[num] }),
        secondary: green,
        error: red
    },
    primary: customColor[num],
    light: customColor[200]
});