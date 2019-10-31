import React, { Component } from 'react';

class Header extends Component {
    render(){
        const {
            title,
            imgUrl,
            handlePageChange,
            children
        }= this.props;

        return(
            <header id="hello">
            <div className="container">
                <div className="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="banner">

                            <h1>{children}</h1>
                            <div class="inner_banner">

                                {title === "fatty" ?
                                <div class="banner_content" >
                                
                                </div>
                                :
                                <div></div>
                                }

                                <div class="stamp">
                                    <img
                                        src={imgUrl}
                                        onLoad={handlePageChange}
                                        onError={handlePageChange}
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="caption" >*Limited Time Only</p>
        </header>
        )
    }
}

export default Header;
