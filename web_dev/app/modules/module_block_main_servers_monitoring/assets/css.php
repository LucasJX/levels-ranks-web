<?php
    /**
     * @author Anastasia Sidak <m0st1ce.nastya@gmail.com>
     *
     * @link https://steamcommunity.com/profiles/76561198038416053
     * @link https://github.com/M0st1ce
     *
     * @license GNU General Public License Version 3
     */
?>
<style><?php if($Modules->array_modules['module_block_main_servers_monitoring']['setting']['type'] == '1'){?>
    .custom-server{background-color:var(--bg-color);padding:0;max-height:200px}.custom-server img{position:relative;width:100%;height:200px;object-fit:cover;transition:all 1s ease-out;opacity:1;-moz-opacity:1;filter:alpha(opacity=100)}.custom-server:hover img{transform:scale(1.1);opacity:1;-moz-opacity:1;filter:alpha(opacity=100)}.card span{position:absolute;overflow:hidden;right:-19px;bottom:-16px;height:135px;width:calc(100% + 35px)}.custom-server .data-basic{position:absolute;width:100%;top:6px;padding-top:5px;padding-bottom:5px;z-index:1;text-align:center}.custom-server .data-basic .back{background-color:rgba(0,0,0,.6)}.custom-server .data-basic .back .data-name{padding-top:4px;font-size:.85vw;font-weight:400;color:#fff;z-index:1;width:100%}.custom-server .data-basic .back .data-map{padding-bottom:4px;width:100%;font-size:.85vw;font-weight:400;color:#fff}.custom-server .data-basic .back .data-players{padding-top:4px;padding-bottom:4px;margin-top:10px;width:100%;font-size:.85vw;font-weight:400;color:#fff;z-index:1;text-align:center}.custom-server:hover input{right:0}.custom-server input{cursor:pointer;position:absolute;width:30%;white-space:nowrap;text-align:center;right:-30%;bottom:15px;font-size:.75vw;font-weight:400;color:#fff;z-index:1;float:left;height:35px;border:0;border-radius:0;background:#101010;outline:none;transition:.2s linear}.custom-server input:hover{background:#262626}.custom-server input:active{outline:none}.custom-server input:focus{outline:none}
    <?php } elseif($Modules->array_modules['module_block_main_servers_monitoring']['setting']['type'] == '3'){?>
    .custom-server{background-color:#141414;padding:0;max-height:200px}.custom-server img{position:relative;height:200px;width:100%;object-fit:cover;transition:all 1s ease-out;opacity:.4}.card span{position:absolute;overflow:hidden;right:-19px;bottom:-16px;height:135px;width:calc(100% + 35px)}.custom-server .data-basic{position:absolute;top:19px;width:100%;padding-top:5px;padding-bottom:5px;z-index:1;text-align:center}.custom-server .data-basic .online{font-size:18px;font-weight:400;width:70%;border:1px solid #fff;margin:0 auto;margin-top:10px;line-height:30px;height:35px}.custom-server .data-basic .online .online2{background:rgba(255,117,0,0.9);background-size:5rem 5rem;background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);height:33px;max-width:100%}.custom-server .data-basic .online .value{font-size:17.5px;font-weight:400;color:#fff;margin-top:-30px}.custom-server .data-basic .data-name{padding-top:6px;font-size:17px;font-weight:500;color:#fff;z-index:1;width:100%}.custom-server .data-basic .ip{font-weight:500;color:#fff}.custom-server .border_ip{border:1px solid #fff;margin-top:16px;margin-left:15%;width:46%;float:left;align-items:center;height:35px}
    <?php } if($Modules->array_modules['module_block_main_servers_monitoring']['setting']['type'] == '1' || $Modules->array_modules['module_block_main_servers_monitoring']['setting']['type'] == '3'){?>
    @media (max-width: 575.98px){.mon-1{display:none}.mon-2{display:block}}@media (min-width: 576px) and (max-width: 767.98px){.mon-1{display:none}.mon-2{display:block}}@media (min-width: 768px) and (max-width: 991.98px){.mon-1{display:none}.mon-2{display:block}}@media (min-width: 992px) and (max-width: 1199.98px){.mon-1{display:none}.mon-2{display:block}}@media (min-width: 1200px) and (max-width: 1499.98px){.custom-server input{cursor:pointer;width:14%;margin-top:16px;margin-right:15%;white-space:nowrap;text-align:center;height:30px;outline:none;font-weight:400;font-size:.8vw;float:right;background:#ff7500;color:#fff;border:1px solid #fff}.ip{margin-top:4%;font-size:14px}.mon-1{display:block}.mon-2{display:none}}@media (min-width: 1500px){.custom-server input{cursor:pointer;width:18%;margin-top:16px;margin-right:15%;white-space:nowrap;text-align:center;height:30px;outline:none;font-weight:400;font-size:.8vw;float:right;background:#ff7500;color:#fff;border:1px solid #fff}.ip{margin-top:2%;font-size:17px}.mon-1{display:block}.mon-2{display:none}}
    <? } ?></style>