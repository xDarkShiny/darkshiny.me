import React from 'react'
import {ComponentPreview, Previews} from '@react-buddy/ide-toolbox'
import {PaletteTree} from './palette'
import Content from "../pages/home/companents/content.jsx";

const ComponentPreviews = () => {
    return (
        <Previews palette={<PaletteTree/>}>
            <ComponentPreview path="/Content">
                <Content/>
            </ComponentPreview>
        </Previews>
    )
}

export default ComponentPreviews
