declare module "\*.svg" {
    import React = require("react");
    export const ReactComponent: React.SFC<React.SVGProps<SVGSVGElement>>;
    const src: string;
    export default src;
}

declare module "\*.png" {
    import React = require("react");
    // export const ReactComponent: React.SFC<Reac>;
    const src: string;
    export default src;
}