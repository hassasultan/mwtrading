(function (s) { var e = function (t, i) { this.$element = s(t), this.options = s.extend({}, e.DEFAULTS, this.dataOptions(), i), this.init() }; e.DEFAULTS = { from: 0, to: 0, speed: 1e3, refreshInterval: 100, decimals: 0, formatter: r, onUpdate: null, onComplete: null }, e.prototype.init = function () { this.value = this.options.from, this.loops = Math.ceil(this.options.speed / this.options.refreshInterval), this.loopCount = 0, this.increment = (this.options.to - this.options.from) / this.loops }, e.prototype.dataOptions = function () { var t = { from: this.$element.data("from"), to: this.$element.data("to"), speed: this.$element.data("speed"), refreshInterval: this.$element.data("refresh-interval"), decimals: this.$element.data("decimals") }, i = Object.keys(t); for (var o in i) { var n = i[o]; typeof t[n] == "undefined" && delete t[n] } return t }, e.prototype.update = function () { this.value += this.increment, this.loopCount++, this.render(), typeof this.options.onUpdate == "function" && this.options.onUpdate.call(this.$element, this.value), this.loopCount >= this.loops && (clearInterval(this.interval), this.value = this.options.to, typeof this.options.onComplete == "function" && this.options.onComplete.call(this.$element, this.value)) }, e.prototype.render = function () { var t = this.options.formatter.call(this.$element, this.value, this.options); this.$element.text(t) }, e.prototype.restart = function () { this.stop(), this.init(), this.start() }, e.prototype.start = function () { this.stop(), this.render(), this.interval = setInterval(this.update.bind(this), this.options.refreshInterval) }, e.prototype.stop = function () { this.interval && clearInterval(this.interval) }, e.prototype.toggle = function () { this.interval ? this.stop() : this.start() }; function r(t, i) { return t.toFixed(i.decimals) } s.fn.countTo = function (t) { return this.each(function () { var i = s(this), o = i.data("countTo"), n = !o || typeof t == "object", a = typeof t == "object" ? t : {}, h = typeof t == "string" ? t : "start"; n && (o && o.stop(), i.data("countTo", o = new e(this, a))), o[h].call(o) }) } })(jQuery);
//# sourceMappingURL=/s/files/1/0641/3431/6288/t/2/assets/jquery.countTo.js.map?v=114738705482761559801650619285
