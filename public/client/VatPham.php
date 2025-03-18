<?php
        require_once("../../display/config.php");
        require_once("../../display/function.php");
        $title = 'BÁN VẬT PHẨM | '.$NDVMEDIA->site('tenweb');
        require_once("../../public/client/Header.php");
        require_once("../../public/client/Nav.php");
?>
<?php
if(isset($_GET['id']))
{
    $row = $NDVMEDIA->get_row(" SELECT * FROM `category_bandv` WHERE `id` = '".check_string($_GET['id'])."' ");
    if(!$row)
    {
        admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 500);
    }
}
else
{
    admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 0);
}

?>
<?php if($NDVMEDIA->site('theme_web') == 'theme1') { ?>
<style>/* ! tailwindcss v3.4.3 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }.relative{position:relative}.mb-2{margin-bottom:0.5rem}.grid{display:grid}.hidden{display:none}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-4{gap:1rem}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}@media (min-width: 640px){.sm\:grid-cols-5{grid-template-columns:repeat(5, minmax(0, 1fr))}}</style>
<style>
/*! tailwindcss v2.2.16 | MIT License | https://tailwindcss.com*/
/*! modern-normalize v1.1.0 | MIT License | https://github.com/sindresorhus/modern-normalize */
html {
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%
}

body {
    margin: 0;
    font-family: system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji
}

hr {
    height: 0;
    color: inherit
}

abbr[title] {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted
}

b,strong {
    font-weight: bolder
}

code,kbd,pre,samp {
    font-family: ui-monospace,SFMono-Regular,Consolas,Liberation Mono,Menlo,monospace;
    font-size: 1em
}

small {
    font-size: 80%
}

sub,sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sub {
    bottom: -.25em
}

sup {
    top: -.5em
}

table {
    text-indent: 0;
    border-color: inherit
}

button,input,optgroup,select,textarea {
    font-family: inherit;
    font-size: 100%;
    line-height: 1.15;
    margin: 0
}

button,select {
    text-transform: none
}

[type=button],[type=submit],button {
    -webkit-appearance: button
}

legend {
    padding: 0
}

progress {
    vertical-align: baseline
}

[type=search] {
    -webkit-appearance: textfield;
    outline-offset: -2px
}

summary {
    display: list-item
}

blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre {
    margin: 0
}

button {
    background-color: transparent;
    background-image: none
}

fieldset,ol,ul {
    margin: 0;
    padding: 0
}

ol,ul {
    list-style: none
}

html {
    font-family: ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
    line-height: 1.5
}

body {
    font-family: inherit;
    line-height: inherit
}

*,:after,:before {
    box-sizing: border-box;
    border: 0 solid
}

hr {
    border-top-width: 1px
}

img {
    border-style: solid
}

textarea {
    resize: vertical
}

input::-moz-placeholder,textarea::-moz-placeholder {
    opacity: 1;
    color: #a3a3a3
}

input:-ms-input-placeholder,textarea:-ms-input-placeholder {
    opacity: 1;
    color: #a3a3a3
}

input::placeholder,textarea::placeholder {
    opacity: 1;
    color: #a3a3a3
}

[role=button],button {
    cursor: pointer
}

table {
    border-collapse: collapse
}

h1,h2,h3,h4,h5,h6 {
    font-size: inherit;
    font-weight: inherit
}

a {
    color: inherit;
    text-decoration: inherit
}

button,input,optgroup,select,textarea {
    padding: 0;
    line-height: inherit;
    color: inherit
}

code,kbd,pre,samp {
    font-family: ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace
}

audio,canvas,embed,iframe,img,object,svg,video {
    display: block;
    vertical-align: middle
}

img,video {
    max-width: 100%;
    height: auto
}

[hidden] {
    display: none
}

*,:after,:before {
    --tw-border-opacity: 1;
    border-color: rgba(229,229,229,var(--tw-border-opacity))
}

.tw-fixed {
    position: fixed
}

.tw-absolute {
    position: absolute
}

.tw-relative {
    position: relative
}

.tw-sticky {
    position: -webkit-sticky;
    position: sticky
}

.tw-top-0 {
    top: 0
}

.tw-top-1 {
    top: .25rem
}

.tw-top-12 {
    top: 3rem
}

.tw-top-14 {
    top: 3.5rem
}

.tw-top-20 {
    top: 5rem
}

.tw-top-1\.5 {
    top: .375rem
}

.tw-right-0 {
    right: 0
}

.tw-right-2 {
    right: .5rem
}

.tw-bottom-0 {
    bottom: 0
}

.tw-bottom-2 {
    bottom: .5rem
}

.tw-left-0 {
    left: 0
}

.tw-left-2 {
    left: .5rem
}

.tw-z-50 {
    z-index: 50
}

.tw-col-span-1 {
    grid-column: span 1/span 1
}

.tw-col-span-2 {
    grid-column: span 2/span 2
}

.tw-col-span-3 {
    grid-column: span 3/span 3
}

.tw-col-span-4 {
    grid-column: span 4/span 4
}

.tw-col-span-5 {
    grid-column: span 5/span 5
}

.tw-col-span-6 {
    grid-column: span 6/span 6
}

.tw-col-span-7 {
    grid-column: span 7/span 7
}

.tw-col-span-8 {
    grid-column: span 8/span 8
}

.tw-col-span-9 {
    grid-column: span 9/span 9
}

.tw-col-span-12 {
    grid-column: span 12/span 12
}

.tw-mx-1 {
    margin-left: .25rem;
    margin-right: .25rem
}

.tw-mx-3 {
    margin-left: .75rem;
    margin-right: .75rem
}

.tw-mx-auto {
    margin-left: auto;
    margin-right: auto
}

.tw-my-1 {
    margin-top: .25rem;
    margin-bottom: .25rem
}

.tw-my-2 {
    margin-top: .5rem;
    margin-bottom: .5rem
}

.tw-my-3 {
    margin-top: .75rem;
    margin-bottom: .75rem
}

.tw-my-4 {
    margin-top: 1rem;
    margin-bottom: 1rem
}

.tw-my-6 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem
}

.tw-my-8 {
    margin-top: 2rem;
    margin-bottom: 2rem
}

.tw-mt-1 {
    margin-top: .25rem
}

.tw-mt-2 {
    margin-top: .5rem
}

.tw-mt-4 {
    margin-top: 1rem
}

.tw-mt-5 {
    margin-top: 1.25rem
}

.tw-mt-8 {
    margin-top: 2rem
}

.tw-mt-10 {
    margin-top: 2.5rem
}

.tw-mr-1 {
    margin-right: .25rem
}

.tw-mr-2 {
    margin-right: .5rem
}

.tw-mr-3 {
    margin-right: .75rem
}

.tw-mb-0 {
    margin-bottom: 0
}

.tw-mb-1 {
    margin-bottom: .25rem
}

.tw-mb-2 {
    margin-bottom: .5rem
}

.tw-mb-3 {
    margin-bottom: .75rem
}

.tw-mb-4 {
    margin-bottom: 1rem
}

.tw-mb-5 {
    margin-bottom: 1.25rem
}

.tw-mb-6 {
    margin-bottom: 1.5rem
}

.tw-mb-8 {
    margin-bottom: 2rem
}

.tw-mb-12 {
    margin-bottom: 3rem
}

.tw-mb-20 {
    margin-bottom: 5rem
}

.tw-mb-32 {
    margin-bottom: 8rem
}

.tw-ml-1 {
    margin-left: .25rem
}

.tw-ml-2 {
    margin-left: .5rem
}

.tw-ml-3 {
    margin-left: .75rem
}

.tw-ml-8 {
    margin-left: 2rem
}

.tw-ml-10 {
    margin-left: 2.5rem
}

.tw-ml-11 {
    margin-left: 2.75rem
}

.tw-block {
    display: block
}

.tw-inline-block {
    display: inline-block
}

.tw-inline {
    display: inline
}

.tw-flex {
    display: flex
}

.tw-inline-flex {
    display: inline-flex
}

.tw-grid {
    display: grid
}

.tw-hidden {
    display: none
}

.tw-h-2 {
    height: .5rem
}

.tw-h-4 {
    height: 1rem
}

.tw-h-5 {
    height: 1.25rem
}

.tw-h-6 {
    height: 1.5rem
}

.tw-h-7 {
    height: 1.75rem
}

.tw-h-8 {
    height: 2rem
}

.tw-h-10 {
    height: 2.5rem
}

.tw-h-11 {
    height: 2.75rem
}

.tw-h-12 {
    height: 3rem
}

.tw-h-16 {
    height: 4rem
}

.tw-h-20 {
    height: 5rem
}

.tw-h-28 {
    height: 7rem
}

.tw-h-32 {
    height: 8rem
}

.tw-h-40 {
    height: 10rem
}

.tw-h-48 {
    height: 12rem
}

.tw-h-56 {
    height: 14rem
}

.tw-h-64 {
    height: 16rem
}

.tw-h-72 {
    height: 18rem
}

.tw-h-80 {
    height: 20rem
}

.tw-h-full {
    height: 100%
}

.tw-h-screen {
    height: 100vh
}

.tw-w-2 {
    width: .5rem
}

.tw-w-4 {
    width: 1rem
}

.tw-w-5 {
    width: 1.25rem
}

.tw-w-6 {
    width: 1.5rem
}

.tw-w-7 {
    width: 1.75rem
}

.tw-w-8 {
    width: 2rem
}

.tw-w-10 {
    width: 2.5rem
}

.tw-w-12 {
    width: 3rem
}

.tw-w-20 {
    width: 5rem
}

.tw-w-28 {
    width: 7rem
}

.tw-w-32 {
    width: 8rem
}

.tw-w-36 {
    width: 9rem
}

.tw-w-40 {
    width: 10rem
}

.tw-w-48 {
    width: 12rem
}

.tw-w-56 {
    width: 14rem
}

.tw-w-72 {
    width: 18rem
}

.tw-w-80 {
    width: 20rem
}

.tw-w-1\/2 {
    width: 50%
}

.tw-w-2\/3 {
    width: 66.666667%
}

.tw-w-3\/4 {
    width: 75%
}

.tw-w-full {
    width: 100%
}

.tw-min-w-max {
    min-width: -webkit-max-content;
    min-width: -moz-max-content;
    min-width: max-content
}

.tw-max-w-xs {
    max-width: 20rem
}

.tw-max-w-sm {
    max-width: 24rem
}

.tw-max-w-md {
    max-width: 28rem
}

.tw-max-w-lg {
    max-width: 32rem
}

.tw-max-w-xl {
    max-width: 36rem
}

.tw-max-w-2xl {
    max-width: 42rem
}

.tw-max-w-6xl {
    max-width: 72rem
}

.tw-max-w-7xl {
    max-width: 80rem
}

.tw-transform {
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

@-webkit-keyframes tw-spin {
    to {
        transform: rotate(1turn)
    }
}

@keyframes tw-spin {
    to {
        transform: rotate(1turn)
    }
}

@-webkit-keyframes tw-ping {
    75%,to {
        transform: scale(2);
        opacity: 0
    }
}

@keyframes tw-ping {
    75%,to {
        transform: scale(2);
        opacity: 0
    }
}

@-webkit-keyframes tw-pulse {
    50% {
        opacity: .5
    }
}

@keyframes tw-pulse {
    50% {
        opacity: .5
    }
}

@-webkit-keyframes tw-bounce {
    0%,to {
        transform: translateY(-25%);
        -webkit-animation-timing-function: cubic-bezier(.8,0,1,1);
        animation-timing-function: cubic-bezier(.8,0,1,1)
    }

    50% {
        transform: none;
        -webkit-animation-timing-function: cubic-bezier(0,0,.2,1);
        animation-timing-function: cubic-bezier(0,0,.2,1)
    }
}

@keyframes tw-bounce {
    0%,to {
        transform: translateY(-25%);
        -webkit-animation-timing-function: cubic-bezier(.8,0,1,1);
        animation-timing-function: cubic-bezier(.8,0,1,1)
    }

    50% {
        transform: none;
        -webkit-animation-timing-function: cubic-bezier(0,0,.2,1);
        animation-timing-function: cubic-bezier(0,0,.2,1)
    }
}

.tw-cursor-default {
    cursor: default
}

.tw-cursor-pointer {
    cursor: pointer
}

.tw-cursor-not-allowed {
    cursor: not-allowed
}

.tw-select-none {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.tw-select-all {
    -webkit-user-select: all;
    -moz-user-select: all;
    user-select: all
}

.tw-grid-cols-10 {
    grid-template-columns: repeat(10,minmax(0,1fr))
}

.tw-grid-cols-11 {
    grid-template-columns: repeat(11,minmax(0,1fr))
}

.tw-grid-cols-12 {
    grid-template-columns: repeat(12,minmax(0,1fr))
}

.tw-flex-col {
    flex-direction: column
}

.tw-flex-wrap {
    flex-wrap: wrap
}

.tw-items-center {
    align-items: center
}

.tw-justify-start {
    justify-content: flex-start
}

.tw-justify-end {
    justify-content: flex-end
}

.tw-justify-center {
    justify-content: center
}

.tw-justify-between {
    justify-content: space-between
}

.tw-gap-0 {
    gap: 0
}

.tw-gap-2 {
    gap: .5rem
}

.tw-gap-3 {
    gap: .75rem
}

.tw-gap-4 {
    gap: 1rem
}

.tw-gap-y-1 {
    row-gap: .25rem
}

.tw-gap-y-4 {
    row-gap: 1rem
}

.tw-overflow-auto {
    overflow: auto
}

.tw-overflow-y-auto {
    overflow-y: auto
}

.tw-overflow-x-hidden {
    overflow-x: hidden
}

.tw-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.tw-rounded-sm {
    border-radius: .125rem
}

.tw-rounded {
    border-radius: .25rem
}

.tw-rounded-md {
    border-radius: .375rem
}

.tw-rounded-full {
    border-radius: 9999px
}

.tw-rounded-t-sm {
    border-top-left-radius: .125rem;
    border-top-right-radius: .125rem
}

.tw-rounded-t {
    border-top-left-radius: .25rem
}

.tw-rounded-r,.tw-rounded-t {
    border-top-right-radius: .25rem
}

.tw-rounded-r {
    border-bottom-right-radius: .25rem
}

.tw-rounded-r-full {
    border-top-right-radius: 9999px;
    border-bottom-right-radius: 9999px
}

.tw-rounded-b-sm {
    border-bottom-right-radius: .125rem;
    border-bottom-left-radius: .125rem
}

.tw-rounded-b {
    border-bottom-right-radius: .25rem
}

.tw-rounded-b,.tw-rounded-l {
    border-bottom-left-radius: .25rem
}

.tw-rounded-l,.tw-rounded-tl {
    border-top-left-radius: .25rem
}

.tw-rounded-tr {
    border-top-right-radius: .25rem
}

.tw-border-2 {
    border-width: 2px
}

.tw-border-4 {
    border-width: 4px
}

.tw-border {
    border-width: 1px
}

.tw-border-t-0 {
    border-top-width: 0
}

.tw-border-t-4 {
    border-top-width: 4px
}

.tw-border-t {
    border-top-width: 1px
}

.tw-border-r-2 {
    border-right-width: 2px
}

.tw-border-r {
    border-right-width: 1px
}

.tw-border-b-0 {
    border-bottom-width: 0
}

.tw-border-b-2 {
    border-bottom-width: 2px
}

.tw-border-b-4 {
    border-bottom-width: 4px
}

.tw-border-b {
    border-bottom-width: 1px
}

.tw-border-dashed {
    border-style: dashed
}

.tw-border-transparent {
    border-color: transparent
}

.tw-border-gray-100 {
    --tw-border-opacity: 1;
    border-color: rgba(245,245,245,var(--tw-border-opacity))
}

.tw-border-gray-200 {
    --tw-border-opacity: 1;
    border-color: rgba(229,229,229,var(--tw-border-opacity))
}

.tw-border-gray-300 {
    --tw-border-opacity: 1;
    border-color: rgba(212,212,212,var(--tw-border-opacity))
}

.tw-border-gray-400 {
    --tw-border-opacity: 1;
    border-color: rgba(163,163,163,var(--tw-border-opacity))
}

.tw-border-gray-700 {
    --tw-border-opacity: 1;
    border-color: rgba(64,64,64,var(--tw-border-opacity))
}

.tw-border-green-300 {
    --tw-border-opacity: 1;
    border-color: rgba(134,239,172,var(--tw-border-opacity))
}

.tw-border-green-400 {
    --tw-border-opacity: 1;
    border-color: rgba(74,222,128,var(--tw-border-opacity))
}

.tw-border-red-300 {
    --tw-border-opacity: 1;
    border-color: rgba(252,165,165,var(--tw-border-opacity))
}

.tw-border-red-400 {
    --tw-border-opacity: 1;
    border-color: rgba(248,113,113,var(--tw-border-opacity))
}

.tw-border-red-500 {
    --tw-border-opacity: 1;
    border-color: rgba(239,68,68,var(--tw-border-opacity))
}

.tw-border-red-600 {
    --tw-border-opacity: 1;
    border-color: rgba(220,38,38,var(--tw-border-opacity))
}

.tw-border-blue-600 {
    --tw-border-opacity: 1;
    border-color: rgba(37,99,235,var(--tw-border-opacity))
}

.tw-border-blue-700 {
    --tw-border-opacity: 1;
    border-color: rgba(29,78,216,var(--tw-border-opacity))
}

.tw-border-blue-800 {
    --tw-border-opacity: 1;
    border-color: rgba(30,64,175,var(--tw-border-opacity))
}

.tw-border-amber-300 {
    --tw-border-opacity: 1;
    border-color: rgba(252,211,77,var(--tw-border-opacity))
}

.tw-border-yellow-500 {
    --tw-border-opacity: 1;
    border-color: rgba(234,179,8,var(--tw-border-opacity))
}

.tw-border-white {
    --tw-border-opacity: 1;
    border-color: rgba(255,255,255,var(--tw-border-opacity))
}

.tw-border-pink-700 {
    --tw-border-opacity: 1;
    border-color: rgba(190,24,93,var(--tw-border-opacity))
}

.hover\:tw-border-gray-800:hover {
    --tw-border-opacity: 1;
    border-color: rgba(38,38,38,var(--tw-border-opacity))
}

.hover\:tw-border-red-500:hover {
    --tw-border-opacity: 1;
    border-color: rgba(239,68,68,var(--tw-border-opacity))
}

.hover\:tw-border-red-600:hover {
    --tw-border-opacity: 1;
    border-color: rgba(220,38,38,var(--tw-border-opacity))
}

.hover\:tw-border-red-700:hover {
    --tw-border-opacity: 1;
    border-color: rgba(185,28,28,var(--tw-border-opacity))
}

.hover\:tw-border-blue-700:hover {
    --tw-border-opacity: 1;
    border-color: rgba(29,78,216,var(--tw-border-opacity))
}

.hover\:tw-border-pink-600:hover {
    --tw-border-opacity: 1;
    border-color: rgba(219,39,119,var(--tw-border-opacity))
}

.focus\:tw-border-red-500:focus {
    --tw-border-opacity: 1;
    border-color: rgba(239,68,68,var(--tw-border-opacity))
}

.tw-bg-gray-100 {
    --tw-bg-opacity: 1;
    background-color: rgba(245,245,245,var(--tw-bg-opacity))
}

.tw-bg-gray-200 {
    --tw-bg-opacity: 1;
    background-color: rgba(229,229,229,var(--tw-bg-opacity))
}

.tw-bg-gray-500 {
    --tw-bg-opacity: 1;
    background-color: rgba(115,115,115,var(--tw-bg-opacity))
}

.tw-bg-gray-700 {
    --tw-bg-opacity: 1;
    background-color: rgba(64,64,64,var(--tw-bg-opacity))
}

.tw-bg-gray-800 {
    --tw-bg-opacity: 1;
    background-color: rgba(38,38,38,var(--tw-bg-opacity))
}

.tw-bg-green-100 {
    --tw-bg-opacity: 1;
    background-color: rgba(220,252,231,var(--tw-bg-opacity))
}

.tw-bg-green-500 {
    --tw-bg-opacity: 1;
    background-color: rgba(34,197,94,var(--tw-bg-opacity))
}

.tw-bg-red-100 {
    --tw-bg-opacity: 1;
    background-color: rgba(254,226,226,var(--tw-bg-opacity))
}

.tw-bg-red-500 {
    --tw-bg-opacity: 1;
    background-color: red !important;
}

.tw-bg-red-600 {
    --tw-bg-opacity: 1;
    background-color: rgba(220,38,38,var(--tw-bg-opacity))
}

.tw-bg-red-700 {
    --tw-bg-opacity: 1;
    background-color: rgba(185,28,28,var(--tw-bg-opacity))
}

.tw-bg-blue-500 {
    --tw-bg-opacity: 1;
    background-color: rgba(59,130,246,var(--tw-bg-opacity))
}

.tw-bg-blue-600 {
    --tw-bg-opacity: 1;
    background-color: rgba(37,99,235,var(--tw-bg-opacity))
}

.tw-bg-blue-700 {
    --tw-bg-opacity: 1;
    background-color: rgba(29,78,216,var(--tw-bg-opacity))
}

.tw-bg-amber-100 {
    --tw-bg-opacity: 1;
    background-color: rgba(254,243,199,var(--tw-bg-opacity))
}

.tw-bg-amber-500 {
    --tw-bg-opacity: 1;
    background-color: rgba(245,158,11,var(--tw-bg-opacity))
}

.tw-bg-yellow-100 {
    --tw-bg-opacity: 1;
    background-color: rgba(254,249,195,var(--tw-bg-opacity))
}

.tw-bg-white {
    --tw-bg-opacity: 1;
    background-color: rgba(255,255,255,var(--tw-bg-opacity))
}

.tw-bg-pink-700 {
    --tw-bg-opacity: 1;
    background-color: rgba(190,24,93,var(--tw-bg-opacity))
}

.hover\:tw-bg-gray-100:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(245,245,245,var(--tw-bg-opacity))
}

.hover\:tw-bg-gray-200:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(229,229,229,var(--tw-bg-opacity))
}

.hover\:tw-bg-gray-300:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(212,212,212,var(--tw-bg-opacity))
}

.hover\:tw-bg-gray-600:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(82,82,82,var(--tw-bg-opacity))
}

.hover\:tw-bg-gray-800:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(38,38,38,var(--tw-bg-opacity))
}

.hover\:tw-bg-green-600:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(22,163,74,var(--tw-bg-opacity))
}

.hover\:tw-bg-red-500:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(239,68,68,var(--tw-bg-opacity))
}

.hover\:tw-bg-red-600:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(220,38,38,var(--tw-bg-opacity));
    color: #ffffff;
}

.hover\:tw-bg-red-700:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(185,28,28,var(--tw-bg-opacity))
}

.hover\:tw-bg-blue-700:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(29,78,216,var(--tw-bg-opacity))
}

.hover\:tw-bg-pink-600:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(219,39,119,var(--tw-bg-opacity))
}

.tw-object-fill {
    -o-object-fit: fill;
    object-fit: fill
}

.tw-object-center {
    -o-object-position: center;
    object-position: center
}

.tw-p-0 {
    padding: 0
}

.tw-p-2 {
    padding: .5rem
}

.tw-p-3 {
    padding: .75rem
}

.tw-p-4 {
    padding: 1rem
}

.tw-px-1 {
    padding-left: .25rem;
    padding-right: .25rem
}

.tw-px-2 {
    padding-left: .5rem;
    padding-right: .5rem
}

.tw-px-3 {
    padding-left: .75rem;
    padding-right: .75rem;
}

.tw-px-4 {
    padding-left: 1rem;
    padding-right: 1rem
}

.tw-px-8 {
    padding-left: 2rem;
    padding-right: 2rem
}

.tw-px-10 {
    padding-left: 2.5rem;
    padding-right: 2.5rem
}

.tw-px-1\.5 {
    padding-left: .375rem;
    padding-right: .375rem
}

.tw-py-0 {
    padding-top: 0;
    padding-bottom: 0
}

.tw-py-1 {
    padding-top: .25rem;
    padding-bottom: .25rem
}

.tw-py-2 {
    padding-top: .5rem;
    padding-bottom: .5rem
}

.tw-py-3 {
    padding-top: .75rem;
    padding-bottom: .75rem
}

.tw-py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem
}

.tw-py-5 {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem
}

.tw-py-6 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem
}

.tw-pt-1 {
    padding-top: .25rem
}

.tw-pt-2 {
    padding-top: .5rem
}

.tw-pt-3 {
    padding-top: .75rem
}

.tw-pt-4 {
    padding-top: 1rem
}

.tw-pt-5 {
    padding-top: 1.25rem
}

.tw-pr-2 {
    padding-right: .5rem
}

.tw-pr-3 {
    padding-right: .75rem
}

.tw-pr-6 {
    padding-right: 1.5rem
}

.tw-pr-8 {
    padding-right: 2rem
}

.tw-pb-2 {
    padding-bottom: .5rem
}

.tw-pb-8 {
    padding-bottom: 2rem
}

.tw-pl-2 {
    padding-left: .5rem
}

.tw-pl-3 {
    padding-left: .75rem
}

.tw-pl-4 {
    padding-left: 1rem
}

.tw-pl-8 {
    padding-left: 2rem
}

.tw-text-left {
    text-align: left
}

.tw-text-center {
    text-align: center
}

.tw-text-right {
    text-align: right
}

.tw-text-xs {
    font-size: .75rem;
    line-height: 1rem
}

.tw-text-sm {
    font-size: .875rem;
    line-height: 1.25rem
}

.tw-text-base {
    font-size: 1rem;
    line-height: 1.5rem
}

.tw-text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem
}

.tw-text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem
}

.tw-text-2xl {
    font-size: 1.5rem;
    line-height: 2rem
}

.tw-text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem
}

.tw-text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem
}

.tw-text-8xl {
    font-size: 6rem;
    line-height: 1
}

.tw-font-medium {
    font-weight: 500
}

.tw-font-semibold {
    font-weight: 600
}

.tw-font-bold {
    font-weight: 700
}

.tw-font-extrabold {
    font-weight: 800
}

.tw-uppercase {
    text-transform: uppercase
}

.tw-capitalize {
    text-transform: capitalize
}

.tw-leading-5 {
    line-height: 1.25rem
}

.tw-leading-6 {
    line-height: 1.5rem
}

.tw-leading-7 {
    line-height: 1.75rem
}

.tw-tracking-wide {
    letter-spacing: .025em
}

.tw-text-gray-300 {
    --tw-text-opacity: 1;
    color: rgba(212,212,212,var(--tw-text-opacity))
}

.tw-text-gray-500 {
    --tw-text-opacity: 1;
    color: rgba(115,115,115,var(--tw-text-opacity))
}

.tw-text-gray-600 {
    --tw-text-opacity: 1;
    color: rgba(82,82,82,var(--tw-text-opacity))
}

.tw-text-gray-700 {
    --tw-text-opacity: 1;
    color: rgba(64,64,64,var(--tw-text-opacity))
}

.tw-text-gray-800 {
    --tw-text-opacity: 1;
    color: rgba(38,38,38,var(--tw-text-opacity))
}

.tw-text-gray-900 {
    --tw-text-opacity: 1;
    color: rgba(23,23,23,var(--tw-text-opacity))
}

.tw-text-green-500 {
    --tw-text-opacity: 1;
    color: rgba(34,197,94,var(--tw-text-opacity))
}

.tw-text-green-600 {
    --tw-text-opacity: 1;
    color: rgba(22,163,74,var(--tw-text-opacity))
}

.tw-text-red-100 {
    --tw-text-opacity: 1;
    color: rgba(254,226,226,var(--tw-text-opacity))
}

.tw-text-red-400 {
    --tw-text-opacity: 1;
    color: rgba(248,113,113,var(--tw-text-opacity))
}

.tw-text-red-500 {
    --tw-text-opacity: 1;
    color: rgba(239,68,68,var(--tw-text-opacity))
}

.tw-text-red-600 {
    --tw-text-opacity: 1;
    color: rgba(220,38,38,var(--tw-text-opacity))
}

.tw-text-red-700 {
    --tw-text-opacity: 1;
    color: rgba(185,28,28,var(--tw-text-opacity))
}

.tw-text-blue-500 {
    --tw-text-opacity: 1;
    color: rgba(59,130,246,var(--tw-text-opacity))
}

.tw-text-blue-800 {
    --tw-text-opacity: 1;
    color: rgba(30,64,175,var(--tw-text-opacity))
}

.tw-text-blue-900 {
    --tw-text-opacity: 1;
    color: rgba(30,58,138,var(--tw-text-opacity))
}

.tw-text-amber-600 {
    --tw-text-opacity: 1;
    color: rgba(217,119,6,var(--tw-text-opacity))
}

.tw-text-yellow-400 {
    --tw-text-opacity: 1;
    color: rgba(250,204,21,var(--tw-text-opacity))
}

.tw-text-yellow-500 {
    --tw-text-opacity: 1;
    color: rgba(234,179,8,var(--tw-text-opacity))
}

.tw-text-yellow-600 {
    --tw-text-opacity: 1;
    color: rgba(202,138,4,var(--tw-text-opacity))
}

.tw-text-white {
    --tw-text-opacity: 1;
    color: rgba(255,255,255,var(--tw-text-opacity));
    color: white;
}

.tw-text-pink-700 {
    --tw-text-opacity: 1;
    color: rgba(190,24,93,var(--tw-text-opacity))
}

.tw-text-teal-500 {
    --tw-text-opacity: 1;
    color: rgba(20,184,166,var(--tw-text-opacity))
}

.hover\:tw-text-gray-800:hover {
    --tw-text-opacity: 1;
    color: rgba(38,38,38,var(--tw-text-opacity))
}

.hover\:tw-text-red-500:hover {
    --tw-text-opacity: 1;
    color: rgba(239,68,68,var(--tw-text-opacity))
}

.hover\:tw-text-red-600:hover {
    --tw-text-opacity: 1;
    color: rgba(220,38,38,var(--tw-text-opacity))
}

.hover\:tw-text-white:hover {
    --tw-text-opacity: 1;
    color: rgba(255,255,255,var(--tw-text-opacity))
}

.tw-underline {
    text-decoration: underline
}

.tw-line-through {
    text-decoration: line-through
}

.tw-placeholder-gray-800::-moz-placeholder {
    --tw-placeholder-opacity: 1;
    color: rgba(38,38,38,var(--tw-placeholder-opacity))
}

.tw-placeholder-gray-800:-ms-input-placeholder {
    --tw-placeholder-opacity: 1;
    color: rgba(38,38,38,var(--tw-placeholder-opacity))
}

.tw-placeholder-gray-800::placeholder {
    --tw-placeholder-opacity: 1;
    color: rgba(38,38,38,var(--tw-placeholder-opacity))
}

.focus\:tw-placeholder-white:focus::-moz-placeholder {
    --tw-placeholder-opacity: 1;
    color: rgba(255,255,255,var(--tw-placeholder-opacity))
}

.focus\:tw-placeholder-white:focus:-ms-input-placeholder {
    --tw-placeholder-opacity: 1;
    color: rgba(255,255,255,var(--tw-placeholder-opacity))
}

.focus\:tw-placeholder-white:focus::placeholder {
    --tw-placeholder-opacity: 1;
    color: rgba(255,255,255,var(--tw-placeholder-opacity))
}

.tw-opacity-50 {
    opacity: .5
}

.tw-opacity-75 {
    opacity: .75
}

.tw-opacity-90 {
    opacity: .9
}

.hover\:tw-opacity-100:hover {
    opacity: 1
}

*,:after,:before {
    --tw-shadow: 0 0 transparent
}

.tw-shadow-sm {
    --tw-shadow: 0 1px 2px 0 rgba(0,0,0,0.05)
}

.tw-shadow,.tw-shadow-sm {
    box-shadow: var(--tw-ring-offset-shadow,0 0 transparent),var(--tw-ring-shadow,0 0 transparent),var(--tw-shadow)
}

.tw-shadow {
    --tw-shadow: 0 1px 3px 0 rgba(0,0,0,0.1),0 1px 2px 0 rgba(0,0,0,0.06)
}

.tw-shadow-lg {
    --tw-shadow: 0 10px 15px -3px rgba(0,0,0,0.1),0 4px 6px -2px rgba(0,0,0,0.05);
    box-shadow: var(--tw-ring-offset-shadow,0 0 transparent),var(--tw-ring-shadow,0 0 transparent),var(--tw-shadow)
}

.focus\:tw-outline-none:focus {
    outline: 2px solid transparent;
    outline-offset: 2px
}

*,:after,:before {
    --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgba(59,130,246,0.5);
    --tw-ring-offset-shadow: 0 0 transparent;
    --tw-ring-shadow: 0 0 transparent
}

.tw-transition {
    transition-property: background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;
    transition-property: background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;
    transition-property: background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: .15s
}

.tw-duration-200 {
    transition-duration: .2s
}

.tw-duration-300 {
    transition-duration: .3s
}

@media (min-width: 640px) {
    .sm\:tw-col-span-3 {
        grid-column:span 3/span 3
    }

    .sm\:tw-col-span-6 {
        grid-column: span 6/span 6
    }
}

@media (min-width: 768px) {
    .md\:tw-top-2 {
        top:.5rem
    }

    .md\:tw-top-14 {
        top: 3.5rem
    }

    .md\:tw-top-2\.5 {
        top: .625rem
    }

    .md\:tw-col-span-2 {
        grid-column: span 2/span 2
    }

    .md\:tw-col-span-3 {
        grid-column: span 3/span 3
    }

    .md\:tw-col-span-4 {
        grid-column: span 4/span 4
    }

    .md\:tw-col-span-5 {
        grid-column: span 5/span 5
    }

    .md\:tw-col-span-6 {
        grid-column: span 6/span 6
    }

    .md\:tw-col-span-8 {
        grid-column: span 8/span 8
    }

    .md\:tw-col-span-9 {
        grid-column: span 9/span 9
    }

    .md\:tw-mt-0 {
        margin-top: 0
    }

    .md\:tw-mr-4 {
        margin-right: 1rem
    }

    .md\:tw-mb-0 {
        margin-bottom: 0
    }

    .md\:tw-mb-3 {
        margin-bottom: .75rem
    }

    .md\:tw-mb-4 {
        margin-bottom: 1rem
    }

    .md\:tw-ml-6 {
        margin-left: 1.5rem
    }

    .md\:tw-block {
        display: block
    }

    .md\:tw-inline-block {
        display: inline-block
    }

    .md\:tw-flex {
        display: flex
    }

    .md\:tw-grid {
        display: grid
    }

    .md\:tw-hidden {
        display: none
    }

    .md\:tw-h-10 {
        height: 2.5rem
    }

    .md\:tw-h-12 {
        height: 3rem
    }

    .md\:tw-h-40 {
        height: 10rem
    }

    .md\:tw-h-64 {
        height: 16rem
    }

    .md\:tw-h-72 {
        height: 18rem
    }

    .md\:tw-h-80 {
        height: 20rem
    }

    .md\:tw-h-96 {
        height: 24rem
    }

    .md\:tw-w-10 {
        width: 2.5rem
    }

    .md\:tw-w-12 {
        width: 3rem
    }

    .md\:tw-w-40 {
        width: 10rem
    }

    .md\:tw-w-72 {
        width: 18rem
    }

    .md\:tw-max-w-md {
        max-width: 28rem
    }

    .md\:tw-gap-3 {
        gap: .75rem
    }

    .md\:tw-gap-4 {
        gap: 1rem
    }

    .md\:tw-rounded-t {
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem
    }

    .md\:tw-rounded-b {
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: .25rem
    }

    .md\:tw-border-0 {
        border-width: 0
    }

    .md\:tw-bg-transparent {
        background-color: transparent
    }

    .md\:tw-bg-white {
        --tw-bg-opacity: 1;
        background-color: rgba(255,255,255,var(--tw-bg-opacity))
    }

    .md\:tw-p-0 {
        padding: 0
    }

    .md\:tw-p-2 {
        padding: .5rem
    }

    .md\:tw-p-3 {
        padding: .75rem
    }

    .md\:tw-p-4 {
        padding: 1rem
    }

    .md\:tw-px-0 {
        padding-left: 0;
        padding-right: 0
    }

    .md\:tw-px-2 {
        padding-left: .5rem;
        padding-right: .5rem
    }

    .md\:tw-px-3 {
        padding-left: .75rem;
        padding-right: .75rem
    }

    .md\:tw-px-4 {
        padding-left: 1rem;
        padding-right: 1rem
    }

    .md\:tw-px-5 {
        padding-left: 1.25rem;
        padding-right: 1.25rem
    }

    .md\:tw-px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .md\:tw-py-0 {
        padding-top: 0;
        padding-bottom: 0
    }

    .md\:tw-py-1 {
        padding-top: .25rem;
        padding-bottom: .25rem
    }

    .md\:tw-py-2 {
        padding-top: .5rem;
        padding-bottom: .5rem
    }

    .md\:tw-py-3 {
        padding-top: .75rem;
        padding-bottom: .75rem
    }

    .md\:tw-py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .md\:tw-pr-5 {
        padding-right: 1.25rem
    }

    .md\:tw-pb-4 {
        padding-bottom: 1rem
    }

    .md\:tw-pb-8 {
        padding-bottom: 2rem
    }

    .md\:tw-pl-3 {
        padding-left: .75rem
    }

    .md\:tw-pl-5 {
        padding-left: 1.25rem
    }

    .md\:tw-text-left {
        text-align: left
    }

    .md\:tw-text-sm {
        font-size: .875rem;
        line-height: 1.25rem
    }

    .md\:tw-text-xl {
        font-size: 1.25rem;
        line-height: 1.75rem
    }

    .md\:tw-text-2xl {
        font-size: 1.5rem;
        line-height: 2rem
    }

    .md\:tw-text-3xl {
        font-size: 1.875rem;
        line-height: 2.25rem
    }
}

    .hh{

        border: 1px solid #E4E5F0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    border-radius: 12px;

    height: 259px;



    }
    .price {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}

.price .price-current {
    color: red;
    font-weight: 700;
    font-size: 15px;
    line-height: 24px;
}
.c-pb-16, .c-py-16 {
    padding-bottom: 16px!important;
}
.w-100 {
    width: 100%!important;
}
    .tw-border-b.tw-border-gray-100.tw-py-2.tw-text-sm.tw-px-2.tw-truncate {
        font-weight: 700!important;
    }
    @media only screen and (max-width: 480px){

    .tw-object-center {
    -o-object-position: center;
    object-position: center;
    max-height: 175px;
}
    }
        .form-content {
            max-width: 400px; /* Điều chỉnh chiều rộng của form */
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
    </style>

    <div class="modal fade tw-fixed tw-top-0 tw-right-0 tw-left-0 tw-bottom-0 tw-flex tw-items-center tw-justify-center tw-p-2" id="dathang" role="dialog" aria-hidden="true" style="z-index: 5000; background: rgba(93, 93, 93, 0.77);">
    <div class="modal-dialog tw-relative tw-max-w-md tw-mx-auto tw-bg-white tw-w-full tw-rounded tw-px-4 md:tw-px-6 tw-py-4" id="dathang">
        <span class="close tw-absolute tw-inline-block tw-px-3 tw-h-8 tw-w-8 tw-flex tw-items-center tw-justify-center tw-border-4 tw-border-white tw-text-sm tw-font-bold tw-rounded-full tw-cursor-pointer tw-py-1 tw-text-white tw-bg-gray-800" style="top: -15px; right: -5px; z-index: 100;" onclick="tat_thong()" data-dismiss="modal" aria-label="Close"><i class="bx bx-x"class="close" data-dismiss="modal" aria-label="Close"></i></span>
        <div class="tw-w-full">

<h3 class="tw-text-center tw-text-lg tw-font-bold tw-text-blue-900 tw-mb-8">Xác Nhận Thanh Toán</h3>


            <div class="tw-mb-4" id="msgGems"></div>
            <div class="tw-mt-5">
                <form id="formSubmit" method="POST">
    
                                    <div class="tw-mb-2">
                                        <div id="thongbao" style="padding-bottom: 13px;"></div>
                                        <label for="" class="tw-text-gray-700 tw-text-sm"><?=$row['title'];?></label>
                                        <select name="type" id="kc" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none">
                                        <option data-amount="0" value="">Chọn gói</option>
                                        <?php foreach($NDVMEDIA->get_list("SELECT * FROM `groups_bandv` WHERE `category` = '".$row['id']."' ") as $group) {?>
                                            <option data-amount="<?=$group['money'];?>" value="<?=$group['id'];?>" class="tw-front-medium tw-text-red-600"><?=$group['title'];?></option>
                                        <?php }?>
                                    </select>                                                        
                                    </div>   



                    <div id="anh"  style="display: none">
                    </div>

                    <div class="tw-mb-4"><label class="tw-text-gray-700 tw-text-sm"> Thành tiền </label> <input id="totalAmount" name="totalAmount" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" placeholder="0" disabled></div>


                    
                        <div class="tw-mb-4"><label class="tw-text-gray-700 tw-text-sm"> Tên đăng nhập roblox <span class="text-danger">*</span> </label> <input id="tk" name="tk" placeholder="Tên Đăng Nhập roblox" value="" required="required" autocorrect="off" spellcheck="false" autocapitalize="off" tabindex="3" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" ></div>

<div class="tw-mb-4"><label class="tw-text-gray-700 tw-text-sm"> Mật Khẩu roblox <span class="text-danger">*</span> </label> <input id="mk" name="mk" placeholder="Tên Đăng Nhập roblox" value="" required="required" autocorrect="off" spellcheck="false" autocapitalize="off" tabindex="3" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" ></div>

                    
                        <div class="tw-mb-4"><label class="tw-text-gray-700 tw-text-sm"> Mã giảm Giá <span class="text-danger">*</span> </label> <input id="magiamgia" name="magiamgia" placeholder="Mã giảm Giá nếu có" value="" autocorrect="off" spellcheck="false" autocapitalize="off" tabindex="3" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" ></div>
                     <label for="" class="tw-text-gray-700 tw-text-sm"><b class="tw-mb-2">Ghi Chú Mua (Nếu Cần)</b></label>
                <input type="text" id="ghichu" placeholder="Nhập Ghi Chú Mua (Nếu Cần)..." autocomplete="off" class="el-input__inner mgb20"><br>
                
                </div>

<div class="tw-text-center tw-text-red-500"></div>
                <button type="submit" id="Submit" class="tw-border tw-rounded tw-h-11 tw-px-3 tw-font-semibold tw-w-full tw-bg-red-500 hover:tw-bg-red-600 tw-text-white tw-mb-3" style="background-color: #0E3EDA;"><span class="tw-relative">MUA NGAY</span></button>
                </form>
            </div>
        </div>
    </div>                    
</div><br>
</div>

<script>
function Tab(id){var i,tabcontent,tablinks;tabcontent=document.getElementsByClassName("tabcontent");for(i=0;i<tabcontent.length;i++){tabcontent[i].style.display="none"}
tablinks=document.getElementsByClassName("tablinks");for(i=0;i<tablinks.length;i++){tablinks[i].className=tablinks[i].className.replace(" ws-bg-red-500 ws-text-white","")}
document.getElementById(id).style.display="block";event.currentTarget.className+=" ws-bg-red-500 ws-text-white"}
document.addEventListener('DOMContentLoaded',function(){var dropdownContentMobile=document.querySelector('.drop-profile-show-mobile');var mobileMenuTrigger=document.querySelector('.ws-text-2xl.bx.bx-menu');mobileMenuTrigger.addEventListener('click',function(event){event.stopPropagation();if(dropdownContentMobile.style.display==='none'){dropdownContentMobile.style.display='block';updateMobileDropdownPosition()}else{dropdownContentMobile.style.display='none'}});document.addEventListener('click',function(event){var isClickInsideMobileDropdown=mobileMenuTrigger.contains(event.target)||dropdownContentMobile.contains(event.target);if(!isClickInsideMobileDropdown){dropdownContentMobile.style.display='none'}});function updateMobileDropdownPosition(){var triggerRect=mobileMenuTrigger.getBoundingClientRect();var windowWidth=window.innerWidth;var dropdownWidth=dropdownContentMobile.offsetWidth;var leftValue=Math.min(triggerRect.left+24,windowWidth-dropdownWidth)-20;var currentInset=dropdownContentMobile.style.inset;var topValue=triggerRect.bottom+window.scrollY;var newInset=`${topValue}px auto auto ${leftValue}px`;if(triggerRect.bottom+dropdownContentMobile.offsetHeight>window.innerHeight){var newTopValue=window.innerHeight-dropdownContentMobile.offsetHeight+window.scrollY;newInset=`${newTopValue}px auto auto ${leftValue}px`}
dropdownContentMobile.style.inset=newInset;dropdownContentMobile.style.left=leftValue+'px'}
window.addEventListener('scroll',updateMobileDropdownPosition);window.addEventListener('resize',updateMobileDropdownPosition);updateMobileDropdownPosition()});var dropdownContent=document.getElementById('dropdownContent');var dropdownTrigger=document.getElementById('dropdownTrigger');var arrow=document.querySelector('.el-popper__arrow');var initialDropdownWidth=210;dropdownTrigger.addEventListener('click',toggleDropdown);dropdownTrigger.addEventListener('touchstart',toggleDropdown);document.addEventListener('click',function(event){var isClickInside=dropdownTrigger.contains(event.target)||dropdownContent.contains(event.target);if(!isClickInside){dropdownContent.style.display='none'}});function updateDropdownPosition(){var triggerRect=dropdownTrigger.getBoundingClientRect();var dropdownRect=dropdownContent.getBoundingClientRect();if(triggerRect.bottom+dropdownRect.height>window.innerHeight){dropdownContent.style.top=window.innerHeight-dropdownRect.height+'px'}else{dropdownContent.style.top=triggerRect.bottom+'px'}
var topValue=triggerRect.bottom+window.scrollY-11+17;var leftValue=triggerRect.left+window.scrollX-50;dropdownContent.style.left=leftValue+'px';arrow.style.left=triggerRect.left+(triggerRect.width/2)-20+'px';var insetValue=`${topValue}px auto auto ${leftValue}px`;dropdownContent.style.inset=insetValue}
window.addEventListener('scroll',updateDropdownPosition);window.addEventListener('resize',updateDropdownPosition);updateDropdownPosition();function toggleDropdown(event){event.stopPropagation();if(dropdownContent.style.display==='none'){dropdownContent.style.display='block';updateDropdownPosition()}else{dropdownContent.style.display='none'}}
</script><style>
.acboxshadow {
    box-shadow: 5px 5px #c2b4b44a;
}
.acboxshadow:hover {
    box-shadow: 8px 8px #c2b4b44a;
}
.mgb20 {
    margin-bottom: 20px;
}
</style><br>
<div class="tw-rounded tw-bg-gray-100">
    <div class="tw-max-w-6xl tw-mx-auto tw-px-2" style="min-height: 100vh;">
        <?php
        $uri = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $uri);
        $id = end($parts);
        $id = (int)$id;
        
        $category = $NDVMEDIA->get_row("SELECT * FROM `category_bandv` WHERE `id` = '".$id."'");
        
        if ($category) {
            echo '<h2 class="tw-mb-2 ws-text-red-500 tw-text-lg tw-font-bold tw-uppercase" id="category-'.$category['id'].'">';
            echo $category['title'];
            echo '</h2>';
        } else {
            echo '<h2 class="tw-mb-2 ws-text-red-500 tw-text-lg tw-font-bold tw-uppercase">';
            echo 'Không Hiển Thị';
            echo '</h2>';
        }
        ?>

        <div class="ws-grid ws-grid-cols-12 ws-gap-2">
            <div class="ws-col-span-12 sm:ws-col-span-12">
                <div class="ws-mb-8">
                    <div class="ws-relative">
                        <div>
                            <!--[-->
                            <div class="ws-more-show ws-more ws-leading-7 ws-mb-4 ws-bg-white ws-rounded ws-py-2 ws-px-3 ws-transition-all ws-duration-200">
                                <?=$category['luuy']; ?>
                            </div>
                            <!----><!--]-->
                        </div>
                    </div>
                </div>
<div class="ws-w-full">
    <div class="ws-grid ws-grid-cols-12 md:ws-grid-cols-12 lg:ws-grid-cols-10 ws-gap-2">
        <?php foreach($NDVMEDIA->get_list("SELECT * FROM `groups_bandv` WHERE `category` = '".$row['id']."' ORDER BY id DESC") as $bandv ) {?>

            <div data-id="<?=$bandv['id'];?>" data-gia="<?=$bandv['money'];?>" class="ws-col-span-6 md:ws-col-span-4 ws-cursor-pointer lg:ws-col-span-2 shake-el ws-border ws-bg-white ws-rounded-lg hover:ws-shadow-lg dathang1">
        <div class="ws-relative ws-w-full ws-inline-block ws-mb-0">
            <div class="ws-overflow-hidden ws-select-none ws-w-full ws-object-fill ws-object-center ws-rounded-t-sm ws-rounded-t-lg" style="aspect-ratio: 16 / 15;">
                <img src="<?=$bandv['img'];?>" class="ws-select-none ws-rounded-lg ws-w-full ws-w-full ws-object-fill ws-object-center ws-rounded-t-sm ws-rounded-t-lg"/>
            </div>
        </div>
        <h2 class="ws-px-3 ws-text-xs md:ws-text-sm ws-font-semibold ws-border-b ws-border-t ws-border-dashed ws-py-1 ws-my-2"><?=$bandv['title'];?></h2>
        <p class="ws-px-3 ws-mb-2 ws-text-sm ws-text-red-600 ws-font-bold"><?=number_format($bandv['money']);?><small class="ws-ml-1 ws-relative ws-top-[-3px]">đ</small></p>
    </div>
    <?php }?>
        
        </div>
</div>
        </div>
    </div>
</div>
</div>



                                    
                                    
                                    

    

                        </div>
    <div class="tw-pb-8">
        <div class="tw-min-w-max" data-v-05c811c3="">
            <section class="tw-flex tw-justify-between tw-py-1 tw-text-gray-700 tw-font-montserrat tw-select-none" data-v-05c811c3="">
              
            </section>
        </div>
    </div>
</div>
<script>

function tat_thong(){


    $("#dathang").hide();

}
$("body").on('click',".dathang1",function(){




    var id = $(this).data('id');

    console.log(id);

    $("#kc").val(id).change();


    $("#dathang").show();

    


});

        $(function(){

                $( "#kc" ).on('change',function(e) {

       var selected = $(this).find('option:selected');
       var extra = selected.data('amount'); 

        $("#totalAmount").val(number_format(extra));
        $("#anh").show();

        });

        });


</script>



 <script type="text/javascript">
$("#Submit").on("click", function() {

    $('#Submit').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled',
        true);
    $.ajax({
        url: "<?=BASE_URL("assets/ajaxs/OdersGame.php");?>",
        method: "POST",
        data: {
            type: 'OrderVatPham',
            tk: $("#tk").val(),
            mk: $("#mk").val(),
            magiamgia: $("#magiamgia").val(),
            ghichu: $("#ghichu").val(),
            dichvu: $("#kc").val()
        },
        success: function(response) {
            $("#thongbao").html(response);
            $('#Submit').html(
                    'Đặt ngay')
                .prop('disabled', false);
        }
    });
});
    </script>
<script>
         function number_format (number, decimals, dec_point, thousands_sep) {
            // Strip all characters but numerical ones.
            number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function (n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
        }

</script>
<?php }?>
<?php 
    require_once("../../public/client/Footer.php");
?>