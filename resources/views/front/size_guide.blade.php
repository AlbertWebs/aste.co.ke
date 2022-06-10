@extends('front.master')
@section('content')

@foreach ($SiteSettings as $Settings)
		
        <!-- Page Content -->
        <main class="page-main">
            <div class="page-header text-center" style="background-image: url('{{asset('theme/assets/images/page-header-bg.jpg')}}')">
                <div class="container">
                    <h1 class="page-title">Size Guide<span>www.aste.co.ke</span></h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/')}}/products-categories">Aste!</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Size Guide</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            
            <div class="block">
                <div class="container">
                    
                    @foreach ($Privacy as $item)
                    <div class="entry-content editor-content">
                        {{-- <h3 class="no-line custom-color size-lg">{{$item->title}}</h3> --}}
                        <div class="panel-group faq" id="Terms">
                            <div class="panel tab-content">
                                <div>
                                    <div class="panel-body">
                                        <p>
                                            <section class="cw" aria-labelledby="pop-ttl">
              
                                                <style type="text/css">
                                                  #last_table {
                                                    width: 300px;
                                                    left: 0px;
                                                    font-family: Roboto, sans-serif !important
                                                  }
                                                
                                                  #productSizeGuide {
                                                    max-width: 950px !important;
                                                  }
                                                
                                                  #size-guide {
                                                    padding: 0 20px 0 0;
                                                    margin-right: 20px
                                                  }
                                                
                                                  #size-guide table {
                                                    margin-bottom: 25px;
                                                    width: 935px
                                                  }
                                                
                                                  .infoSizeGuide table {
                                                    width: 100%
                                                  }
                                                
                                                  table {
                                                    font-size: inherit;
                                                    font: 100%
                                                  }
                                                
                                                  table {
                                                    border-collapse: collapse;
                                                    border-spacing: 0
                                                  }
                                                
                                                  table {
                                                    white-space: normal;
                                                    line-height: normal;
                                                    font-weight: normal;
                                                    font-size: 12px;
                                                    font-variant: normal;
                                                    font-style: normal;
                                                    color: -webkit-text;
                                                    text-align: start
                                                  }
                                                
                                                  table {
                                                    display: table;
                                                    border-collapse: separate;
                                                    border-spacing: 2px;
                                                    border-color: gray
                                                  }
                                                
                                                  tbody {
                                                    display: table-row-group;
                                                    vertical-align: middle;
                                                    border-color: inherit
                                                  }
                                                
                                                  tr {
                                                    display: table-row;
                                                    vertical-align: inherit;
                                                    border-color: inherit
                                                  }
                                                
                                                  #size-guide tr td:first-child,
                                                  #size-guide tr td.first-child {
                                                    text-align: left
                                                  }
                                                
                                                  #size-guide td {
                                                    padding: 3px;
                                                    text-align: center;
                                                    border-bottom: 1px solid #c1c1c1
                                                  }
                                                
                                                  .infoSizeGuide table td {
                                                    vertical-align: top
                                                  }
                                                
                                                  th,
                                                  td {
                                                    margin: 0;
                                                    padding: 0
                                                  }
                                                
                                                  td,
                                                  th {
                                                    display: table-cell;
                                                    vertical-align: inherit
                                                  }
                                                
                                                  #size-guide-table h2 {
                                                    background: #f90 !important;
                                                    color: #fff;
                                                    padding: 3px 5px;
                                                    font-size: 15px;
                                                    margin-right: 0;
                                                    margin-bottom: 10px;
                                                    width: 925px;
                                                    margin-top: 15px
                                                  }
                                                
                                                  #size-guide-table h2 {
                                                    line-height: 22px;
                                                    font-weight: bold;
                                                    padding-bottom: 20px;
                                                    text-transform: uppercase
                                                  }
                                                
                                                  #size-guide-table h1,
                                                  #size-guide-table h2,
                                                  #size-guide-table h3,
                                                  #size-guide-table h4,
                                                  #size-guide-table h5,
                                                  #size-guide-table h6 {
                                                    font-size: 100%;
                                                    font-weight: normal;
                                                  }
                                                
                                                  div,
                                                  dl,
                                                  dt,
                                                  dd,
                                                  ul,
                                                  ol,
                                                  li,
                                                  h1,
                                                  h2,
                                                  h3,
                                                  h4,
                                                  h5,
                                                  h6,
                                                  pre,
                                                  code,
                                                  form,
                                                  fieldset,
                                                  legend,
                                                  input,
                                                  textarea,
                                                  p,
                                                  blockquote,
                                                  th,
                                                  td {
                                                    margin: 0;
                                                    padding: 0
                                                  }
                                                
                                                  h2 {
                                                    display: block;
                                                    font-size: 1.5em;
                                                    -webkit-margin-before: 0.83em;
                                                    -webkit-margin-after: 0.83em;
                                                    -webkit-margin-start: 0px;
                                                    -webkit-margin-end: 0px;
                                                    font-weight: bold
                                                  }
                                                
                                                  #size-guide .header {
                                                    font-weight: bold;
                                                    padding-top: 5px;
                                                    background: #eaeaea
                                                  }
                                                
                                                  #size-guide .odd {
                                                    background: 0
                                                  }
                                                
                                                  #size-guide .footnote {
                                                    margin-bottom: 20px;
                                                    display: block
                                                  }
                                                
                                                  .footNote {
                                                    font-style: italic
                                                  }
                                                
                                                  .footNote {
                                                    font-size: 11px !important
                                                  }
                                                
                                                  #size-guide {
                                                    padding-left: 20px
                                                  }
                                                
                                                  #size-guide-image img {
                                                    margin-bottom: 20px
                                                  }
                                                
                                                  #size-guide h1 {
                                                    font-size: 16px;
                                                    color: #000 !important;
                                                    font-weight: 700
                                                  }
                                                
                                                  .infoSizeGuide h1 {
                                                    font-size: 22px;
                                                    font-weight: bold;
                                                    text-transform: uppercase;
                                                    margin-bottom: 1em
                                                  }
                                                </style>
                                                <div class="tabs table-responsive">
                                                  {{-- <input type="radio" name="aste-tab" id="aste-tab-1" checked=""> --}}
                                                  {{-- <label for="aste-tab-1">WOMEN'S CLOTHING - DRESSES, SKIRTS, TOPS, SHIRTS, JACKETS, TROUSERS</label> --}}
                                                  <div>
                                                    <table class="table table-light">
                                                      <thead>
                                                        <tr>
                                                          <td colspan="8">WOMEN'S CLOTHING - DRESSES, SKIRTS, TOPS, SHIRTS, JACKETS, TROUSERS</td>
                                                        </tr>
                                                        <tr>
                                                          <td>UK</td>
                                                          <td>US</td>
                                                          <td>China</td>
                                                          <td>Europe</td>
                                                          <td>S-M-L</td>
                                                          <td>One Size</td>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                          <td>4</td>
                                                          <td>0</td>
                                                          <td>-</td>
                                                          <td>32</td>
                                                          <td>XXS</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>6</td>
                                                          <td>2</td>
                                                          <td>S</td>
                                                          <td>34</td>
                                                          <td>XS</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>8</td>
                                                          <td>4</td>
                                                          <td>M</td>
                                                          <td>36</td>
                                                          <td>S</td>
                                                          <td>ONE SIZE</td>
                                                        </tr>
                                                        <tr>
                                                          <td>10</td>
                                                          <td>6</td>
                                                          <td>L</td>
                                                          <td>38</td>
                                                          <td>M</td>
                                                          <td>ONE SIZE</td>
                                                        </tr>
                                                        <tr>
                                                          <td>12</td>
                                                          <td>8</td>
                                                          <td>XL</td>
                                                          <td>40</td>
                                                          <td>L</td>
                                                          <td>ONE SIZE</td>
                                                        </tr>
                                                        <tr>
                                                          <td>14</td>
                                                          <td>10</td>
                                                          <td>XXL</td>
                                                          <td>42</td>
                                                          <td>XL</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>16</td>
                                                          <td>12</td>
                                                          <td>XXXL</td>
                                                          <td>44</td>
                                                          <td>XXL</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>18</td>
                                                          <td>14</td>
                                                          <td>-</td>
                                                          <td>46</td>
                                                          <td>XXXL</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>20</td>
                                                          <td>16</td>
                                                          <td>-</td>
                                                          <td>48</td>
                                                          <td>4XL</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>22</td>
                                                          <td>18</td>
                                                          <td>-</td>
                                                          <td>50</td>
                                                          <td>5XL</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>24</td>
                                                          <td>20</td>
                                                          <td>-</td>
                                                          <td>52</td>
                                                          <td>6XL</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>26</td>
                                                          <td>22</td>
                                                          <td>-</td>
                                                          <td>54</td>
                                                          <td>7XL</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>28</td>
                                                          <td>24</td>
                                                          <td>-</td>
                                                          <td>56</td>
                                                          <td>8XL</td>
                                                          <td>-</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                  <input type="radio" name="aste-tab" id="aste-tab-2" checked="">
                                                  <label for="aste-tab-2">PLUS SIZES</label>
                                                  <div>
                                                    <table class="table table-light">
                                                      <thead>
                                                        <tr>
                                                          <td colspan="8">PLUS SIZES</td>
                                                        </tr>
                                                        <tr>
                                                          <td>UK</td>
                                                          <td>US</td>
                                                          <td>Europe</td>
                                                          <td>China</td>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                          <td>4</td>
                                                          <td>0</td>
                                                          <td>32</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>6</td>
                                                          <td>2</td>
                                                          <td>34</td>
                                                          <td>S</td>
                                                        </tr>
                                                        <tr>
                                                          <td>8</td>
                                                          <td>4</td>
                                                          <td>36</td>
                                                          <td>M</td>
                                                        </tr>
                                                        <tr>
                                                          <td>10</td>
                                                          <td>6</td>
                                                          <td>38</td>
                                                          <td>L</td>
                                                        </tr>
                                                        <tr>
                                                          <td>12</td>
                                                          <td>8</td>
                                                          <td>40</td>
                                                          <td>XL</td>
                                                        </tr>
                                                        <tr>
                                                          <td>14</td>
                                                          <td>10</td>
                                                          <td>42</td>
                                                          <td>XXL</td>
                                                        </tr>
                                                        <tr>
                                                          <td>16</td>
                                                          <td>12</td>
                                                          <td>44</td>
                                                          <td>XXXL</td>
                                                        </tr>
                                                        <tr>
                                                          <td>18</td>
                                                          <td>14</td>
                                                          <td>46</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>20</td>
                                                          <td>16</td>
                                                          <td>48</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>22</td>
                                                          <td>18</td>
                                                          <td>50</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>24</td>
                                                          <td>20</td>
                                                          <td>52</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>26</td>
                                                          <td>22</td>
                                                          <td>54</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>28</td>
                                                          <td>24</td>
                                                          <td>56</td>
                                                          <td>-</td>
                                                        </tr>
                                                        <tr>
                                                          <td>30</td>
                                                          <td>26</td>
                                                          <td>58</td>
                                                          <td>-</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                  <input type="radio" name="aste-tab" id="aste-tab-3" checked="">
                                                  <label for="aste-tab-3">DENIM SIZE CONVERSION</label>
                                                  <div>
                                                    <table class="table table-light">
                                                      <thead>
                                                        <tr>
                                                          <td colspan="8">DENIM SIZE CONVERSION</td>
                                                        </tr>
                                                        <tr>
                                                          <td>DENIM SIZE</td>
                                                          <td>UK</td>
                                                          <td>Europe</td>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                          <td>24/25</td>
                                                          <td>4</td>
                                                          <td>30</td>
                                                        </tr>
                                                        <tr>
                                                          <td>25/26</td>
                                                          <td>6</td>
                                                          <td>32</td>
                                                        </tr>
                                                        <tr>
                                                          <td>27</td>
                                                          <td>8</td>
                                                          <td>34</td>
                                                        </tr>
                                                        <tr>
                                                          <td>28</td>
                                                          <td>10</td>
                                                          <td>36</td>
                                                        </tr>
                                                        <tr>
                                                          <td>29</td>
                                                          <td>12</td>
                                                          <td>38</td>
                                                        </tr>
                                                        <tr>
                                                          <td>30</td>
                                                          <td>14</td>
                                                          <td>40</td>
                                                        </tr>
                                                        <tr>
                                                          <td>31</td>
                                                          <td>16</td>
                                                          <td>42</td>
                                                        </tr>
                                                        <tr>
                                                          <td>32</td>
                                                          <td>18</td>
                                                          <td>44</td>
                                                        </tr>
                                                        <tr>
                                                          <td>32/33</td>
                                                          <td>20</td>
                                                          <td>46</td>
                                                        </tr>
                                                        <tr>
                                                          <td>33</td>
                                                          <td>22</td>
                                                          <td>48</td>
                                                        </tr>
                                                        <tr>
                                                          <td>33/34</td>
                                                          <td>24</td>
                                                          <td>50</td>
                                                        </tr>
                                                        <tr>
                                                          <td>34</td>
                                                          <td>26</td>
                                                          <td>52</td>
                                                        </tr>
                                                        <tr>
                                                          <td>34/35</td>
                                                          <td>28</td>
                                                          <td>54</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                  <input type="radio" name="aste-tab" id="aste-tab-4" checked="">
                                                  <label for="aste-tab-4">SINGLE SIZE AND MATCHING MEASUREMENTS</label>
                                                  <div>
                                                    <table class="table table-light">
                                                      <thead>
                                                        <tr>
                                                          <td colspan="8">SINGLE SIZE AND MATCHING MEASUREMENTS</td>
                                                        </tr>
                                                        <tr>
                                                          <td>UK</td>
                                                          <td>Europe</td>
                                                          <td>Measurements</td>
                                                          <td>Bust</td>
                                                          <td>Waist</td>
                                                          <td>Hips</td>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                          <td>4</td>
                                                          <td>30</td>
                                                          <td>CM</td>
                                                          <td>76</td>
                                                          <td>58</td>
                                                          <td>83½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>4</td>
                                                          <td>30</td>
                                                          <td>IN</td>
                                                          <td>30</td>
                                                          <td>22¾</td>
                                                          <td>32¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>6</td>
                                                          <td>32</td>
                                                          <td>CM</td>
                                                          <td>78½</td>
                                                          <td>60½</td>
                                                          <td>86</td>
                                                        </tr>
                                                        <tr>
                                                          <td>6</td>
                                                          <td>32</td>
                                                          <td>IN</td>
                                                          <td>31</td>
                                                          <td>23¾</td>
                                                          <td>33¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>8</td>
                                                          <td>34</td>
                                                          <td>CM</td>
                                                          <td>81</td>
                                                          <td>63</td>
                                                          <td>88½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>8</td>
                                                          <td>34</td>
                                                          <td>IN</td>
                                                          <td>32</td>
                                                          <td>24¾</td>
                                                          <td>34¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>10</td>
                                                          <td>36</td>
                                                          <td>CM</td>
                                                          <td>86</td>
                                                          <td>68</td>
                                                          <td>93½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>10</td>
                                                          <td>36</td>
                                                          <td>IN</td>
                                                          <td>34</td>
                                                          <td>26¾</td>
                                                          <td>36¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>12</td>
                                                          <td>38</td>
                                                          <td>CM</td>
                                                          <td>91</td>
                                                          <td>73</td>
                                                          <td>98½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>12</td>
                                                          <td>38</td>
                                                          <td>IN</td>
                                                          <td>36</td>
                                                          <td>28¾</td>
                                                          <td>38¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>14</td>
                                                          <td>40</td>
                                                          <td>CM</td>
                                                          <td>96</td>
                                                          <td>78</td>
                                                          <td>103½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>14</td>
                                                          <td>40</td>
                                                          <td>IN</td>
                                                          <td>38</td>
                                                          <td>30¾</td>
                                                          <td>40¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>16</td>
                                                          <td>42</td>
                                                          <td>CM</td>
                                                          <td>101</td>
                                                          <td>83</td>
                                                          <td>108½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>16</td>
                                                          <td>42</td>
                                                          <td>IN</td>
                                                          <td>40</td>
                                                          <td>32¾</td>
                                                          <td>42¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>18</td>
                                                          <td>44</td>
                                                          <td>CM</td>
                                                          <td>108½</td>
                                                          <td>90½</td>
                                                          <td>116</td>
                                                        </tr>
                                                        <tr>
                                                          <td>18</td>
                                                          <td>44</td>
                                                          <td>IN</td>
                                                          <td>43</td>
                                                          <td>35¾</td>
                                                          <td>45¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>20</td>
                                                          <td>46</td>
                                                          <td>CM</td>
                                                          <td>116</td>
                                                          <td>98</td>
                                                          <td>123½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>20</td>
                                                          <td>46</td>
                                                          <td>IN</td>
                                                          <td>45½</td>
                                                          <td>38½</td>
                                                          <td>48½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>22</td>
                                                          <td>48</td>
                                                          <td>CM</td>
                                                          <td>122</td>
                                                          <td>104</td>
                                                          <td>129½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>22</td>
                                                          <td>48</td>
                                                          <td>IN</td>
                                                          <td>48</td>
                                                          <td>41</td>
                                                          <td>51</td>
                                                        </tr>
                                                        <tr>
                                                          <td>24</td>
                                                          <td>50</td>
                                                          <td>CM</td>
                                                          <td>128</td>
                                                          <td>110</td>
                                                          <td>135½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>24</td>
                                                          <td>50</td>
                                                          <td>IN</td>
                                                          <td>50½</td>
                                                          <td>43½</td>
                                                          <td>53½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>26</td>
                                                          <td>52</td>
                                                          <td>CM</td>
                                                          <td>134</td>
                                                          <td>116</td>
                                                          <td>141½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>26</td>
                                                          <td>52</td>
                                                          <td>IN</td>
                                                          <td>53</td>
                                                          <td>46</td>
                                                          <td>56</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                  <input type="radio" name="aste-tab" id="aste-tab-5" checked="">
                                                  <label for="aste-tab-5">DUAL SIZE AND MATCHING MEASUREMENTS</label>
                                                  <div>
                                                    <table class="table table-light">
                                                      <thead>
                                                        <tr>
                                                          <td colspan="8">DUAL SIZE AND MATCHING MEASUREMENTS</td>
                                                        </tr>
                                                        <tr>
                                                          <td>Dual Size</td>
                                                          <td>UK</td>
                                                          <td>Europe</td>
                                                          <td>Measurements</td>
                                                          <td>Bust</td>
                                                          <td>Waist</td>
                                                          <td>Hips</td>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                          <td>XS</td>
                                                          <td>4-6</td>
                                                          <td>30-32</td>
                                                          <td>CM</td>
                                                          <td>78½</td>
                                                          <td>60½</td>
                                                          <td>86</td>
                                                        </tr>
                                                        <tr>
                                                          <td>XS</td>
                                                          <td>4-6</td>
                                                          <td>30-32</td>
                                                          <td>IN</td>
                                                          <td>31</td>
                                                          <td>23¾</td>
                                                          <td>33¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>S</td>
                                                          <td>8-10</td>
                                                          <td>34-36</td>
                                                          <td>CM</td>
                                                          <td>81-86</td>
                                                          <td>63-68</td>
                                                          <td>88½-93½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>S</td>
                                                          <td>8-10</td>
                                                          <td>34-36</td>
                                                          <td>IN</td>
                                                          <td>32-34</td>
                                                          <td>24¾-26¾</td>
                                                          <td>34¾-36¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>M</td>
                                                          <td>12-14</td>
                                                          <td>38-40</td>
                                                          <td>CM</td>
                                                          <td>91-98</td>
                                                          <td>73-78</td>
                                                          <td>98½-103½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>M</td>
                                                          <td>12-14</td>
                                                          <td>38-40</td>
                                                          <td>IN</td>
                                                          <td>36-38</td>
                                                          <td>28¾-30¾</td>
                                                          <td>38¾-40¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>L</td>
                                                          <td>16-18</td>
                                                          <td>42-44</td>
                                                          <td>CM</td>
                                                          <td>101-108½</td>
                                                          <td>83-90½</td>
                                                          <td>83-90½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>L</td>
                                                          <td>16-18</td>
                                                          <td>42-44</td>
                                                          <td>IN</td>
                                                          <td>40-43</td>
                                                          <td>32¾-35¾</td>
                                                          <td>42¾-45¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>XL</td>
                                                          <td>20</td>
                                                          <td>46</td>
                                                          <td>CM</td>
                                                          <td>116</td>
                                                          <td>98</td>
                                                          <td>123½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>XL</td>
                                                          <td>20</td>
                                                          <td>46</td>
                                                          <td>IN</td>
                                                          <td>45½</td>
                                                          <td>38½</td>
                                                          <td>48½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>XXL</td>
                                                          <td>22</td>
                                                          <td>48</td>
                                                          <td>CM</td>
                                                          <td>122</td>
                                                          <td>104</td>
                                                          <td>129½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>XXL</td>
                                                          <td>22</td>
                                                          <td>48</td>
                                                          <td>IN</td>
                                                          <td>48</td>
                                                          <td>41</td>
                                                          <td>51</td>
                                                        </tr>
                                                        <tr>
                                                          <td>XXXL</td>
                                                          <td>24</td>
                                                          <td>50</td>
                                                          <td>CM</td>
                                                          <td>128</td>
                                                          <td>110</td>
                                                          <td>135½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>XXXL</td>
                                                          <td>24</td>
                                                          <td>-</td>
                                                          <td>IN</td>
                                                          <td>50½</td>
                                                          <td>43½</td>
                                                          <td>53½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>XXXL</td>
                                                          <td>26</td>
                                                          <td>52</td>
                                                          <td>CM</td>
                                                          <td>134</td>
                                                          <td>116</td>
                                                          <td>141½</td>
                                                        </tr>
                                                        <tr>
                                                          <td>XXXL</td>
                                                          <td>26</td>
                                                          <td>52</td>
                                                          <td>IN</td>
                                                          <td>53</td>
                                                          <td>46</td>
                                                          <td>56</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                  <input type="radio" name="aste-tab" id="aste-tab-6" checked="">
                                                  <label for="aste-tab-6">MATERNITY CLOTHING</label>
                                                  <div>
                                                    <table class="table table-light">
                                                      <thead>
                                                        <tr>
                                                          <td colspan="8">MATERNITY CLOTHING</td>
                                                        </tr>
                                                        <tr>
                                                          <td>UK</td>
                                                          <td>Europe</td>
                                                          <td>Measurements</td>
                                                          <td>Bust</td>
                                                          <td>Waist</td>
                                                          <td>Hips</td>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                          <td>8</td>
                                                          <td>34</td>
                                                          <td>CM</td>
                                                          <td>86</td>
                                                          <td>95</td>
                                                          <td>93</td>
                                                        </tr>
                                                        <tr>
                                                          <td>8</td>
                                                          <td>34</td>
                                                          <td>IN</td>
                                                          <td>34</td>
                                                          <td>37¾</td>
                                                          <td>36¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>10</td>
                                                          <td>36</td>
                                                          <td>CM</td>
                                                          <td>91</td>
                                                          <td>100</td>
                                                          <td>98</td>
                                                        </tr>
                                                        <tr>
                                                          <td>10</td>
                                                          <td>36</td>
                                                          <td>IN</td>
                                                          <td>36</td>
                                                          <td>39½</td>
                                                          <td>38¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>12</td>
                                                          <td>38</td>
                                                          <td>CM</td>
                                                          <td>96</td>
                                                          <td>105</td>
                                                          <td>103</td>
                                                        </tr>
                                                        <tr>
                                                          <td>12</td>
                                                          <td>38</td>
                                                          <td>IN</td>
                                                          <td>38</td>
                                                          <td>41½</td>
                                                          <td>40¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>14</td>
                                                          <td>40</td>
                                                          <td>CM</td>
                                                          <td>101</td>
                                                          <td>110</td>
                                                          <td>108</td>
                                                        </tr>
                                                        <tr>
                                                          <td>14</td>
                                                          <td>40</td>
                                                          <td>IN</td>
                                                          <td>40</td>
                                                          <td>43½</td>
                                                          <td>42¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>16</td>
                                                          <td>42</td>
                                                          <td>CM</td>
                                                          <td>106</td>
                                                          <td>115</td>
                                                          <td>113</td>
                                                        </tr>
                                                        <tr>
                                                          <td>16</td>
                                                          <td>42</td>
                                                          <td>IN</td>
                                                          <td>42</td>
                                                          <td>45½</td>
                                                          <td>44¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>18</td>
                                                          <td>44</td>
                                                          <td>CM</td>
                                                          <td>113</td>
                                                          <td>122</td>
                                                          <td>120</td>
                                                        </tr>
                                                        <tr>
                                                          <td>18</td>
                                                          <td>44</td>
                                                          <td>IN</td>
                                                          <td>44¾</td>
                                                          <td>48¼</td>
                                                          <td>45¾</td>
                                                        </tr>
                                                        <tr>
                                                          <td>20</td>
                                                          <td>46</td>
                                                          <td>CM</td>
                                                          <td>120</td>
                                                          <td>129</td>
                                                          <td>127</td>
                                                        </tr>
                                                        <tr>
                                                          <td>20</td>
                                                          <td>46</td>
                                                          <td>IN</td>
                                                          <td>47½</td>
                                                          <td>51</td>
                                                          <td>48½</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                  <input type="radio" name="aste-tab" id="aste-tab-7" checked="">
                                                  <label for="aste-tab-7">DUAL SIZED SWIMWEAR</label>
                                                  <div>
                                                    <table class="table table-light">
                                                      <thead>
                                                        <tr>
                                                          <td colspan="8">DUAL SIZED SWIMWEAR</td>
                                                        </tr>
                                                        <tr>
                                                          <td>UK</td>
                                                          <td>Europe</td>
                                                          <td>-</td>
                                                          <td>UK</td>
                                                          <td>Europe</td>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                          <td>8 B/C</td>
                                                          <td>36 B/C</td>
                                                          <td>-</td>
                                                          <td>8 D/DD</td>
                                                          <td>36 D/E</td>
                                                        </tr>
                                                        <tr>
                                                          <td>10 B/C</td>
                                                          <td>38 B/C</td>
                                                          <td>-</td>
                                                          <td>10 D/DD</td>
                                                          <td>38 D/E</td>
                                                        </tr>
                                                        <tr>
                                                          <td>12 B/C</td>
                                                          <td>40 B/C</td>
                                                          <td>-</td>
                                                          <td>12 D/DD</td>
                                                          <td>40 D/E</td>
                                                        </tr>
                                                        <tr>
                                                          <td>14 B/C</td>
                                                          <td>42 B/C</td>
                                                          <td>-</td>
                                                          <td>14 D/DD</td>
                                                          <td>42 D/E</td>
                                                        </tr>
                                                        <tr>
                                                          <td>16 B/C</td>
                                                          <td>44 B/C</td>
                                                          <td>-</td>
                                                          <td>16 D/DD</td>
                                                          <td>44 D/E</td>
                                                        </tr>
                                                        <tr>
                                                          <td>18 B/C</td>
                                                          <td>46 B/C</td>
                                                          <td>-</td>
                                                          <td>18 D/DD</td>
                                                          <td>46 D/E</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                  <input type="radio" name="aste-tab" id="aste-tab-8" checked="">
                                                  <label for="aste-tab-8">BRA SIZING</label>
                                                  <div>
                                                    <table class="table table-light">
                                                      <thead>
                                                        <tr>
                                                          <td colspan="8">BRA SIZING</td>
                                                        </tr>
                                                        <tr>
                                                          <td>UK</td>
                                                          <td>Europe</td>
                                                          <td>-</td>
                                                          <td>UK</td>
                                                          <td>Europe</td>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                          <td>32A</td>
                                                          <td>70A</td>
                                                          <td>-</td>
                                                          <td>36A</td>
                                                          <td>80A</td>
                                                        </tr>
                                                        <tr>
                                                          <td>32B</td>
                                                          <td>70B</td>
                                                          <td>-</td>
                                                          <td>36B</td>
                                                          <td>80B</td>
                                                        </tr>
                                                        <tr>
                                                          <td>32C</td>
                                                          <td>70C</td>
                                                          <td>-</td>
                                                          <td>36C</td>
                                                          <td>80C</td>
                                                        </tr>
                                                        <tr>
                                                          <td>32D</td>
                                                          <td>70D</td>
                                                          <td>-</td>
                                                          <td>36D</td>
                                                          <td>80D</td>
                                                        </tr>
                                                        <tr>
                                                          <td>32DD</td>
                                                          <td>70E</td>
                                                          <td>-</td>
                                                          <td>36DD</td>
                                                          <td>80E</td>
                                                        </tr>
                                                        <tr>
                                                          <td>32E</td>
                                                          <td>70F</td>
                                                          <td>-</td>
                                                          <td>36E</td>
                                                          <td>80F</td>
                                                        </tr>
                                                        <tr>
                                                          <td>32F</td>
                                                          <td>70G</td>
                                                          <td>-</td>
                                                          <td>36F</td>
                                                          <td>80G</td>
                                                        </tr>
                                                        <tr>
                                                          <td>34A</td>
                                                          <td>75A</td>
                                                          <td>-</td>
                                                          <td>38A</td>
                                                          <td>85A</td>
                                                        </tr>
                                                        <tr>
                                                          <td>34B</td>
                                                          <td>75B</td>
                                                          <td>-</td>
                                                          <td>38B</td>
                                                          <td>85B</td>
                                                        </tr>
                                                        <tr>
                                                          <td>34C</td>
                                                          <td>75C</td>
                                                          <td>-</td>
                                                          <td>38C</td>
                                                          <td>85C</td>
                                                        </tr>
                                                        <tr>
                                                          <td>34D</td>
                                                          <td>75D</td>
                                                          <td>-</td>
                                                          <td>38D</td>
                                                          <td>85D</td>
                                                        </tr>
                                                        <tr>
                                                          <td>34DD</td>
                                                          <td>75E</td>
                                                          <td>-</td>
                                                          <td>38DD</td>
                                                          <td>85E</td>
                                                        </tr>
                                                        <tr>
                                                          <td>34E</td>
                                                          <td>75F</td>
                                                          <td>-</td>
                                                          <td>38E</td>
                                                          <td>85E</td>
                                                        </tr>
                                                        <tr>
                                                          <td>34F</td>
                                                          <td>75G</td>
                                                          <td>-</td>
                                                          <td>38F</td>
                                                          <td>85G</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                </div></div></div></section>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </main>
@endforeach
@endsection