"use strict";

// common components
import ChartCanvas from "react-stockcharts/lib/ChartCanvas";
import Chart from "react-stockcharts/lib/Chart";

import BackgroundText from "react-stockcharts/lib/BackgroundText";

// interaction components
import EventCapture from "react-stockcharts/lib/EventCapture";

// chart types & Series
import * as series from "react-stockcharts/lib/series";
import * as scale from "react-stockcharts/lib/scale";

import * as coordinates from "react-stockcharts/lib/coordinates";
import * as indicator from "react-stockcharts/lib/indicator";
import * as algorithm from "react-stockcharts/lib/algorithm";

import * as annotation from "react-stockcharts/lib/annotation";

import * as axes from "react-stockcharts/lib/axes";
import * as tooltip from "react-stockcharts/lib/tooltip";
import * as helper from "react-stockcharts/lib/helper";

import * as interactive from "react-stockcharts/lib/interactive";
import * as Utils from "react-stockcharts/lib/utils";

const version = "0.5.0";

export default {
	ChartCanvas,
	Chart,
	EventCapture,
	BackgroundText,
	series,
	coordinates,
	indicator,
	algorithm,
	axes,
	scale,
	tooltip,
	annotation,
	helper,
	interactive,
	version,
	Utils
};

