module.exports = {
  extends: [
    "stylelint-config-standard",
    "stylelint-config-recommended-tailwindcss"
  ],
  plugins: [
    "stylelint-tailwindcss"
  ],
  rules: {
    // Allow unknown at-rules for Tailwind directives
    "at-rule-no-unknown": [true, {
      ignoreAtRules: [
        "tailwind",
        "apply",
        "variants",
        "responsive",
        "screen"
      ]
    }]
  }
};
