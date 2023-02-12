import { createTheme } from "@material-ui/core/styles";
import grey from "@material-ui/core/colors/grey";
import red from "@material-ui/core/colors/red";

export const contrastText = "#D46A6A";

export const theme = createTheme({
    palette: {
        primary: {
            light: grey[50],
            main: grey[50],
            dark: grey[500],
            contrastText: contrastText,
        },
        secondary: {
            light: red[300],
            main: red[500],
            dark: red[700],
            contrastText: contrastText,
        },
        error: red,
    },
    props: {
        MuiTypography: {
            variantMapping: {
                title: "h1",
            },
        },
    },
    overrides: {
        MuiTabs: {
            indicator: {
                backgroundColor: red[400],
            },
        },
        MuiTab: {
            root: {
                "&:hover": {
                    backgroundColor: red[100],
                    color: red[700],
                },
                "&$selected": {
                    color: red[700],
                    "&:hover": {
                        backgroundColor: red[100],
                        color: red[700],
                    },
                    "&:focus": {
                        color: red[700],
                    },
                },
            },
        },
    },
});
