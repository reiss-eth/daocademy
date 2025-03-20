// SPDX-License-Identifier: MIT
pragma solidity ^0.8.29;

import "@openzeppelin/contracts/token/ERC20/ERC20.sol";

contract DAOcademy is ERC20 {
    uint256 private constant _maxSupply = 1_000_000_000 * 10 ** 18; // 1 Milliarde BURN

    constructor() ERC20("DAOcademy", "BURN") {
        _mint(msg.sender, _maxSupply);
    }

    function maxSupply() public pure returns (uint256) {
        return _maxSupply;
    }
}
