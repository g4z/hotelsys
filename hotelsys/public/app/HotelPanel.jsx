
var HotelPanel = React.createClass({
    
    getInitialState: function() {
        return {
            uuid: null,
            name: null,
            image: null,
            amenities: [],
        };
    },

    componentDidMount: function() {},

    componentWillUnmount: function() {},

    onClick: function(e) {
        console.log("hello");
    },

    render: function() {
        return (<div onClick={this.onClick} className="col-md-4 hotel-panel">
            <h2>{this.state.name}</h2>
            <div>{this.state.amenities.map(function(amenity) {
                    return <div>{amenity}</div>;
                })}</div>
            <img src={this.state.image}/>
        </div>);
    }
});
