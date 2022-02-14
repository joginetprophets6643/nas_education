import React from 'react'

const DropdownSelect = () => {
  return (
    <div className="dropdown-select-wrap">
        <h3 className="select-label">
        You can select any state/UT, District or block from here
        </h3>
        <div className="dropdown">
            <a className="menu-level-main dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">India</a>
            <div className="dropdown-menu menu-level-1">
                <div className="inputSearch">
                    <input type="text" className="form-control" />
                </div>
                <div className="dropdown-list">
                    <a href="#" className="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">India</a>
                    <ul className="dropdown-menu menu-level-2 scrollbar-y-lightblue">
                        <li className="dropdown-list">
                            <a className="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#"> Andaman & Nicobar Islands</a>
                            <ul className="dropdown-menu menu-level-3">
                                <li className="dropdown-list"><a className="dropdown-item" href="#"> Nicobar Islands</a></li>
                                <li className="dropdown-list"><a className="dropdown-item" href="#"> North and Middle Andaman</a></li>
                                <li className="dropdown-list"><a className="dropdown-item" href="#"> South Andaman</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  )
}

export default DropdownSelect