import React,{Component} from 'react';
import Header from './Header';
import logo from '../../images/logo.png'
import stamp from '../../images/stamp.png';
import SideNavigator from './SideNavigator';

class CoverImage extends Component {
    constructor(props){
        super(props);
        this.state = {
            sideNavStatus: false,
        };
        this.toggleSideNav = this.toggleSideNav.bind(this);
    }

    toggleSideNav(){
        const currentStatus = this.state.sideNavStatus;
        this.setState({ sideNavStatus: !currentStatus });
    };

    render(){
        const {handlePageChange} = this.props;
        const {sideNavStatus} = this.state;
        return (

                 <Header
                    title={'fatty'}
                    imgUrl={stamp}
                    handlePageChange={handlePageChange}
                 >

                 </Header>
          
        );
    }

};

export default CoverImage;
