function Welcom(props) {
    console.log(props)
    return "Bonjour toi"
}

ReactDOM.render(<Welcom name="jean"/>, document.querySelector('#dashboard'))
