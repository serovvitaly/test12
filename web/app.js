//import { Router, Route, IndexRoute, browserHistory } from 'react-router'

class TopMenu extends React.Component {
    render() {
        return React.createElement('h1', null, 'Hello-'+this.props.name);
    }
}

const element = <TopMenu name="Foo5" />;

ReactDOM.render(
    element,
    document.getElementById('rootContainer')
);
