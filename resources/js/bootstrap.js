import '../../node_modules/slim-select/dist/slimselect.css';
import _, { initial } from 'lodash';
import 'bootstrap';
import $ from 'jquery';
import Swal from 'sweetalert';
import axios from 'axios';
import SlimSelect from 'slim-select';

window.$ = $;
window.SlimSelect = SlimSelect;
window._ = _;
window.Swal = Swal;
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

