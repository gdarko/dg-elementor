#!/bin/bash
sass assets/scss/style.scss > assets/scss/theme.css
sass --style compressed assets/scss/style.scss > assets/css/theme.min.css
