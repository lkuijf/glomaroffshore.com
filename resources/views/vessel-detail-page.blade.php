@extends('templates.glomaroffshore')
@section('content')
@include('sections.hero', [
    'images' => $data['vessel']->large_image,
    'bigHeader' => $data['vessel']->title->rendered,
    ])
{{-- @if ($data['vessel']->type_text) --}}
<div class="vesselDetailPageTextWrap">
    <div class="inner">
        <h2>VESSEL <strong>SPECIFICATIONS</strong></h2>
        {{-- <p>{!! $data['vessel']->type_text !!}</p> --}}
        <div class="startInfo">
            <div><img src="{{ $data['vessel']->small_image[0]['url'] }}" alt="{{ $data['vessel']->small_image[0]['alt'] }}"></div>
            <div>
                {{-- <div> --}}
                    <dl>
                        <dt>Type</dt>
                        <dd>{!! $data['vessel']->type_text !!}</dd>
                        <dt>Class</dt>
                        <dd>{{ ($data['vessel']->class?$data['vessel']->class:'N/A') }}</dd>
                        <dt>Length</dt>
                        <dd>{{ ($data['vessel']->length?$data['vessel']->length:'N/A') }}</dd>
                        <dt>Breadth</dt>
                        <dd>{{ ($data['vessel']->breadth?$data['vessel']->breadth:'N/A') }}</dd>
                    </dl>
                {{-- </div> --}}
            </div>
        </div>
        <div class="specsWrap">
            <div class="specBoxes">
                <div>
                    <h4>GENERAL</h4>
                    <ul>
                        <li><span>Class</span><span>{{ ($data['vessel']->class?$data['vessel']->class:'N/A') }}</span></li>
                        <li><span>Flag</span><span>{{ ($data['vessel']->flag?$data['vessel']->flag:'N/A') }}</span></li>
                        <li><span>Built</span><span>{{ ($data['vessel']->built?$data['vessel']->built:'N/A') }}</span></li>
                        <li><span>Rebuilt</span><span>{{ ($data['vessel']->rebuilt?$data['vessel']->rebuilt:'N/A') }}</span></li>
                        <li><span>Call Sign</span><span>{{ ($data['vessel']->{'call-sign'}?$data['vessel']->{'call-sign'}:'N/A') }}</span></li>
                    </ul>
                </div>
                <div>
                    <h4>DIMENSIONS</h4>
                    <ul>
                        <li><span>Length</span><span>{{ ($data['vessel']->length?$data['vessel']->length:'N/A') }}</span></li>
                        <li><span>Breadth</span><span>{{ ($data['vessel']->breadth?$data['vessel']->breadth:'N/A') }}</span></li>
                        <li><span>Draft</span><span>{{ ($data['vessel']->draft?$data['vessel']->draft:'N/A') }}</span></li>
                        <li><span>Depth</span><span>{{ ($data['vessel']->depth?$data['vessel']->depth:'N/A') }}</span></li>
                        <li><span>GT</span><span>{{ ($data['vessel']->gt?$data['vessel']->gt:'N/A') }}</span></li>
                        <li><span>NT</span><span>{{ ($data['vessel']->nt?$data['vessel']->nt:'N/A') }}</span></li>
                    </ul>
                </div>
                <div>
                    <h4>PERFORMANCE</h4>
                    <ul>
                        <li><span>Bollard Pull</span><span>{{ ($data['vessel']->{'bollard-pull'}?$data['vessel']->{'bollard-pull'}:'N/A') }}</span></li>
                        <li><span>Max Speed + Fuel Consumption</span><span>{{ ($data['vessel']->{'max-speed-fuel-consumption'}?$data['vessel']->{'max-speed-fuel-consumption'}:'N/A') }}</span></li>
                        <li><span>Cruise/Economic Speed + Fuel Consumption</span><span>{{ ($data['vessel']->{'cruise-economic-speed-fuel-consumption'}?$data['vessel']->{'cruise-economic-speed-fuel-consumption'}:'N/A') }}</span></li>
                        <li><span>Standby Fuel Consumption</span><span>{{ ($data['vessel']->{'standby-fuel-consumption'}?$data['vessel']->{'standby-fuel-consumption'}:'N/A') }}</span></li>
                    </ul>
                </div>
                <div>
                    <h4>MACHINERY &amp; PROPULSION</h4>
                    <ul>
                        <li><span>Main Engine</span><span>{{ ($data['vessel']->{'main-engine'}?$data['vessel']->{'main-engine'}:'N/A') }}</span></li>
                        <li><span>Gearbox</span><span>{{ ($data['vessel']->{'gearbox'}?$data['vessel']->{'gearbox'}:'N/A') }}</span></li>
                        <li><span>Propellor & shafts</span><span>{{ ($data['vessel']->{'propellor-shafts'}?$data['vessel']->{'propellor-shafts'}:'N/A') }}</span></li>
                        <li><span>Auxiliary Engines</span><span>{{ ($data['vessel']->{'auxiliary-engines'}?$data['vessel']->{'auxiliary-engines'}:'N/A') }}</span></li>
                        <li><span>Harbor generator</span><span>{{ ($data['vessel']->{'harbor-generator'}?$data['vessel']->{'harbor-generator'}:'N/A') }}</span></li>
                        <li><span>Azimuth Thruster</span><span>{{ ($data['vessel']->{'azimuth-thruster'}?$data['vessel']->{'azimuth-thruster'}:'N/A') }}</span></li>
                        <li><span>Sewage plant</span><span>{{ ($data['vessel']->{'sewage-plant'}?$data['vessel']->{'sewage-plant'}:'N/A') }}</span></li>
                        <li><span>Engine room fire protection</span><span>{{ ($data['vessel']->{'engine-room-fire-protection'}?$data['vessel']->{'engine-room-fire-protection'}:'N/A') }}</span></li>
                        <li><span>Bilge water separator</span><span>{{ ($data['vessel']->{'bilge-water-separator'}?$data['vessel']->{'bilge-water-separator'}:'N/A') }}</span></li>
                        <li><span>Fuel oil separator</span><span>{{ ($data['vessel']->{'fuel-oil-separator'}?$data['vessel']->{'fuel-oil-separator'}:'N/A') }}</span></li>
                        <li><span>Electrical installation</span><span>{{ ($data['vessel']->{'electrical-installation'}?$data['vessel']->{'electrical-installation'}:'N/A') }}</span></li>
                    </ul>
                </div>
            </div>
            <div class="specBoxes">
                <div>
                    <h4>TANK CAPACITIES &amp; DECK AREA</h4>
                    <ul>
                        <li><span>Total Fresh Water Tank</span><span>{{ ($data['vessel']->{'total-fresh-water-tank'}?$data['vessel']->{'total-fresh-water-tank'}:'N/A') }}</span></li>
                        <li><span>Total Ballast Water Tank</span><span>{{ ($data['vessel']->{'total-ballast-water-tank'}?$data['vessel']->{'total-ballast-water-tank'}:'N/A') }}</span></li>
                        <li><span>Total Fuel Tank</span><span>{{ ($data['vessel']->{'total-fuel-tank'}?$data['vessel']->{'total-fuel-tank'}:'N/A') }}</span></li>
                        <li><span>Deck Area</span><span>{{ ($data['vessel']->{'deck-area'}?$data['vessel']->{'deck-area'}:'N/A') }}</span></li>
                    </ul>
                </div>
                <div>
                    <h4>DECK EQUIPMENT</h4>
                    <ul>
                        <li><span>Deckcrane PS</span><span>{{ ($data['vessel']->{'deckcrane-ps'}?$data['vessel']->{'deckcrane-ps'}:'N/A') }}</span></li>
                        <li><span>Safe Working Load</span><span>{{ ($data['vessel']->{'safe-working-load'}?$data['vessel']->{'safe-working-load'}:'N/A') }}</span></li>
                        <li><span>Steel Wire</span><span>{{ ($data['vessel']->{'steel-wire-1'}?$data['vessel']->{'steel-wire-1'}:'N/A') }}</span></li>
                    </ul>
                </div>
                <div>
                    <h4>RESCUE EQUIPMENT</h4>
                    <ul>
                        <li><span>Davit SB</span><span>{{ ($data['vessel']->{'davit-sb'}?$data['vessel']->{'davit-sb'}:'N/A') }}</span></li>
                        <li><span>Working Load Limit</span><span>{{ ($data['vessel']->{'working-load-limit'}?$data['vessel']->{'working-load-limit'}:'N/A') }}</span></li>
                        <li><span>Steel Wire</span><span>{{ ($data['vessel']->{'steel-wire-2'}?$data['vessel']->{'steel-wire-2'}:'N/A') }}</span></li>
                        <li><span>Fast Rescue Craft</span><span>{{ ($data['vessel']->{'fast-rescue-craft'}?$data['vessel']->{'fast-rescue-craft'}:'N/A') }}</span></li>
                    </ul>
                </div>
                <div>
                    <h4>RADIO &amp; NAVIGATION EQUIPMENT</h4>
                    <ul>
                        <li><span>Compass</span><span>{{ ($data['vessel']->{'compass'}?$data['vessel']->{'compass'}:'N/A') }}</span></li>
                        <li><span>Radar</span><span>{{ ($data['vessel']->{'radar'}?$data['vessel']->{'radar'}:'N/A') }}</span></li>
                        <li><span>GMDSS</span><span>{{ ($data['vessel']->{'gmdss'}?$data['vessel']->{'gmdss'}:'N/A') }}</span></li>
                        <li><span>EPIRB</span><span>{{ ($data['vessel']->{'epirb'}?$data['vessel']->{'epirb'}:'N/A') }}</span></li>
                        <li><span>SART</span><span>{{ ($data['vessel']->{'sart'}?$data['vessel']->{'sart'}:'N/A') }}</span></li>
                        <li><span>AIS</span><span>{{ ($data['vessel']->{'ais'}?$data['vessel']->{'ais'}:'N/A') }}</span></li>
                        <li><span>LRIT</span><span>{{ ($data['vessel']->{'lrit'}?$data['vessel']->{'lrit'}:'N/A') }}</span></li>
                    </ul>
                </div>
                <div>
                    <h4>ACCOMMODATION</h4>
                    <ul>
                        <li><span>Total Accommodation (Berths)</span><span>{{ ($data['vessel']->{'total-accommodation'}?$data['vessel']->{'total-accommodation'}:'N/A') }}</span></li>
                        <li><span>Cabins</span><span>{{ ($data['vessel']->{'cabins'}?$data['vessel']->{'cabins'}:'N/A') }}</span></li>
                        <li><span>Single Cabins</span><span>{{ ($data['vessel']->{'single-cabins'}?$data['vessel']->{'single-cabins'}:'N/A') }}</span></li>
                        <li><span>Double Cabins</span><span>{{ ($data['vessel']->{'double-cabins'}?$data['vessel']->{'double-cabins'}:'N/A') }}</span></li>
                        <li><span>Three Bed Cabins</span><span>{{ ($data['vessel']->{'three-bed-cabins'}?$data['vessel']->{'three-bed-cabins'}:'N/A') }}</span></li>
                        <li><span>Six Bed Cabins</span><span>{{ ($data['vessel']->{'six-bed-cabins'}?$data['vessel']->{'six-bed-cabins'}:'N/A') }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
        @if ($data['vessel']->{'pdf-sheet'})
        <div class="vesselButtons">
            <p><a href="{{ $data['vessel']->{'pdf-sheet'} }}" target="_blank" class="ctaBtn btnWhiteBorder">DOWNLOAD <strong>PDF SHEET</strong></a></p>
            <p><a href="tel:{{ $data['website_options']->phone_number }}" target="_blank" class="ctaBtn btnTransparent btnIconPhone">{{ $data['website_options']->phone_number }}</a></p>
        </div>
        @endif
    </div>
</div>
{{-- @endif --}}
@endsection