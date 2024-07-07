<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="stylesheet" href="qgis/css/leaflet.css">
  <link rel="stylesheet" href="qgis/css/L.Control.Layers.Tree.css">
  <link rel="stylesheet" href="qgis/css/qgis2web.css">
  <link rel="stylesheet" href="qgis/css/fontawesome-all.min.css">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="shortcut icon" href="images/reelicon.png" type="image/x-icon" />
  <style>
    #map {
      width: 100%;
      height: 700px;
      background-color: #2178fa;
    }
  </style>
  <title>Dinas Kesehatan Kabupaten Kudus</title>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span> Telpon : (0291) 438-152 </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span> Email : dinkes@kuduskab.go.id </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="profil.php">Profil </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="peta.php">Peta </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="berita.php">Berita </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="kontak.php">Kontak </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>
  <!-- map section -->
  <section class="map_section layout_padding2">
    <div class="heading_container heading_center">
      <h2>Jumlah Kasus HIV/AIDS <span>Januari-April 2024</span></h2>
    </div>
    <div class="container">
      <div id="map">
      </div>
    </div>
    <div class="container bg-white d-flex justify-content-center py-4">
      <div class="btn btn-primary mx-4"><a href="objek.php" class="text-white">Tabel Fasilitas Kesehatan</a></div>
      <div class="btn btn-primary mx-4"><a href="angka.php" class="text-white">Tabel kasus
          HIV/AIDS</a></div>
    </div>
  </section>
  <!-- end maps section -->

  <!-- info section -->
  <section class="info_section">
    <div class="container">
      <div class="info_bottom layout_padding2">
        <div class="info_row">
          <div class="col-md-6 col-lg-4">
            <h5>Kontak</h5>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Jl. Diponegoro No. 15 Kabupaten Kudus, 59312 </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span> Call (0291) 438-152 </span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span> dinkes@kuduskab.go.id </span>
              </a>
            </div>
            <div class="social_box">
              <a href="https://www.facebook.com/dinkes.kabkudus" target="_blank">
                <i class="fa fa-facebook col-6" aria-hidden="true"></i>
              </a>
              <a href="https://www.youtube.com/@DIKTVchannel" target="_blank">
                <i class="fa fa-youtube col-6" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/dinkeskabkudus" target="_blank">
                <i class="fa fa-instagram col-6" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="info_post">
              <h5>Jam Pelayanan</h5>
              <div class="info_contact">
                <a href=""><span>Senin - Kamis : 07.00 - 15.15</span></a>
                <a href=""><span>Jumat : 07.00 - 11.15</span></a>
                <a href=""><span>Sabtu - Minggu : Libur</span></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.718205201796!2d110.84662787584232!3d-6.804094593193331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c4d0aa8a368d%3A0xbe887578cf387f2e!2sDinas%20Kesehatan%20Kabupaten%20Kudus!5e0!3m2!1sid!2sid!4v1719392857114!5m2!1sid!2sid"
              width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> Powered By
        <a href="https://server.umrmaulana.my.id/">Umar Maulana</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
    integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- Page level plugins -->
  <script src="web-admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="web-admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="web-admin/js/demo/datatables-demo.js"></script>
  <!-- custom js -->
  <script src="qgis/js/qgis2web_expressions.js"></script>
  <script src="qgis/js/leaflet.js"></script>
  <script src="qgis/js/L.Control.Layers.Tree.min.js"></script>
  <script src="qgis/js/leaflet.rotatedMarker.js"></script>
  <script src="qgis/js/leaflet.pattern.js"></script>
  <script src="qgis/js/leaflet-hash.js"></script>
  <script src="qgis/js/Autolinker.min.js"></script>
  <script src="qgis/js/rbush.min.js"></script>
  <script src="qgis/js/labelgun.min.js"></script>
  <script src="qgis/js/labels.js"></script>
  <script src="qgis/data/KabupatenKudus_0.php"></script>
  <script src="qgis/data/objek_1.php"></script>
  <script>
    var map = L.map('map', {
      zoomControl: true, maxZoom: 28, minZoom: 1
    }).fitBounds([[-6.969152525720453, 110.61103788560642], [-6.590517275720451, 111.28841803568072]]);
    var hash = new L.Hash(map);
    map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
    var autolinker = new Autolinker({ truncate: { length: 30, location: 'smart' } });
    function removeEmptyRowsFromPopupContent(content, feature) {
      var tempDiv = document.createElement('div');
      tempDiv.innerHTML = content;
      var rows = tempDiv.querySelectorAll('tr');
      for (var i = 0; i < rows.length; i++) {
        var td = rows[i].querySelector('td.visible-with-data');
        var key = td ? td.id : '';
        if (td && td.classList.contains('visible-with-data') && feature.properties[key] == null) {
          rows[i].parentNode.removeChild(rows[i]);
        }
      }
      return tempDiv.innerHTML;
    }
    document.querySelector(".leaflet-popup-pane").addEventListener("load", function (event) {
      var tagName = event.target.tagName,
        popup = map._popup;
      // Also check if flag is already set.
      if (tagName === "IMG" && popup && !popup._updated) {
        popup._updated = true; // Set flag to prevent looping.
        popup.update();
      }
    }, true);
    var bounds_group = new L.featureGroup([]);
    function setBounds() {
      map.setMaxBounds(map.getBounds());
    }
    function pop_KabupatenKudus_0(feature, layer) {
      var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kecamatan</th>\
                        <td class="visible-with-data" id="Kecamatan">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td class="visible-with-data" id="Jumlah-Kasus-HIV/AIDS"colspan="2"><strong>Jumlah-Kasus-HIV/AIDS</strong><br />' + (feature.properties['Jumlah-Kasus-HIV/AIDS'] !== null ? autolinker.link(feature.properties['Jumlah-Kasus-HIV/AIDS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
      layer.bindPopup(popupContent, { maxHeight: 400 });
      var popup = layer.getPopup();
      var content = popup.getContent();
      var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
      popup.setContent(updatedContent);
    }

    function style_KabupatenKudus_0_0(feature) {
      if (feature.properties['Jumlah-Kasus-HIV/AIDS'] <= 2.000000) {
        return {
          pane: 'pane_KabupatenKudus_0',
          opacity: 1,
          color: 'rgba(35,35,35,1.0)',
          dashArray: '',
          lineCap: 'butt',
          lineJoin: 'miter',
          weight: 1.0,
          fill: true,
          fillOpacity: 1,
          fillColor: 'rgba(175,215,255,1.0)',
          interactive: true,
        }
      }
      if (feature.properties['Jumlah-Kasus-HIV/AIDS'] >= 2.000000 && feature.properties['Jumlah-Kasus-HIV/AIDS'] <= 4.000000) {
        return {
          pane: 'pane_KabupatenKudus_0',
          opacity: 1,
          color: 'rgba(35,35,35,1.0)',
          dashArray: '',
          lineCap: 'butt',
          lineJoin: 'miter',
          weight: 1.0,
          fill: true,
          fillOpacity: 1,
          fillColor: 'rgba(115,178,216,1.0)',
          interactive: true,
        }
      }
      if (feature.properties['Jumlah-Kasus-HIV/AIDS'] >= 4.000000) {
        return {
          pane: 'pane_KabupatenKudus_0',
          opacity: 1,
          color: 'rgba(35,35,35,1.0)',
          dashArray: '',
          lineCap: 'butt',
          lineJoin: 'miter',
          weight: 1.0,
          fill: true,
          fillOpacity: 1,
          fillColor: 'rgba(8,48,107,1.0)',
          interactive: true,
        }
      }
    }
    map.createPane('pane_KabupatenKudus_0');
    map.getPane('pane_KabupatenKudus_0').style.zIndex = 400;
    map.getPane('pane_KabupatenKudus_0').style['mix-blend-mode'] = 'normal';
    var layer_KabupatenKudus_0 = new L.geoJson(json_KabupatenKudus_0, {
      attribution: '',
      interactive: true,
      dataVar: 'json_KabupatenKudus_0',
      layerName: 'layer_KabupatenKudus_0',
      pane: 'pane_KabupatenKudus_0',
      onEachFeature: pop_KabupatenKudus_0,
      style: style_KabupatenKudus_0_0,
    });
    bounds_group.addLayer(layer_KabupatenKudus_0);
    map.addLayer(layer_KabupatenKudus_0);
    function pop_objek_1(feature, layer) {
      var popupContent =
        '<table>\
                    <tr>\
                        <th scope="row">nama</th>\
                        <td>' +
        (feature.properties["nama"] !== null
          ? autolinker.link(feature.properties["nama"].toLocaleString())
          : "") +
        '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kategori</th>\
                        <td>' +
        (feature.properties["kategori"] !== null
          ? autolinker.link(feature.properties["kategori"].toLocaleString())
          : "") +
        '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nomor telpon</th>\
                        <td>' +
        (feature.properties["nmr_tlp"] !== null
          ? autolinker.link(feature.properties["nmr_tlp"].toLocaleString())
          : "") +
        "</td>\
                    </tr>\
                </table>";
      layer.bindPopup(popupContent, { maxHeight: 400 });
      var popup = layer.getPopup();
      var content = popup.getContent();
      var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
      popup.setContent(updatedContent);
    }

    function style_objek_1_0(feature) {
      switch (String(feature.properties['kategori'])) {
        case 'Klinik':
          return {
            pane: 'pane_objek_1',
            rotationAngle: 0.0,
            rotationOrigin: 'center center',
            icon: L.icon({
              iconUrl: '/images/klinik.png',
              iconSize: [20, 20]
            }),
            interactive: true,
          }
          break;
        case 'Rumah Sakit':
          return {
            pane: 'pane_objek_1',
            rotationAngle: 0.0,
            rotationOrigin: 'center center',
            icon: L.icon({
              iconUrl: '/images/rs.png',
              iconSize: [20, 20]
            }),
            interactive: true,
          }
          break;
      }
    }
    map.createPane('pane_objek_1');
    map.getPane('pane_objek_1').style.zIndex = 401;
    map.getPane('pane_objek_1').style['mix-blend-mode'] = 'normal';
    var layer_objek_1 = new L.geoJson(json_objek_1, {
      attribution: '',
      interactive: true,
      dataVar: 'json_objek_1',
      layerName: 'layer_objek_1',
      pane: 'pane_objek_1',
      onEachFeature: pop_objek_1,
      pointToLayer: function (feature, latlng) {
        var context = {
          feature: feature,
          variables: {}
        };
        return L.marker(latlng, style_objek_1_0(feature));
      },
    });
    bounds_group.addLayer(layer_objek_1);
    map.addLayer(layer_objek_1);
    var baseMaps = {};
    var overlaysTree = [
      { label: 'Fasilitas Kesehatan<br /><table><tr><td style="text-align: center;"><img src="images/klinik.png" style="width:25px;"/></td><td>Klinik</td></tr><tr><td style="text-align: center;"><img src="images/rs.png" style="width:25px;" /></td><td>Rumah Sakit</td></tr></table>', layer: layer_objek_1 },
      { label: 'Kasus HIV/AIDS<br /><table><tr><td style="text-align: center;"><img src="qgis/legend/KabupatenKudus_0_20.png" /></td><td>< 2 Kasus</td></tr><tr><td style="text-align: center;"><img src="qgis/legend/KabupatenKudus_0_41.png" /></td><td>3 - 4 Kasus</td></tr><tr><td style="text-align: center;"><img src="qgis/legend/KabupatenKudus_0_52.png" /></td><td>> 5  Kasus</td></tr></table>', layer: layer_KabupatenKudus_0 },]
    var lay = L.control.layers.tree(null, overlaysTree, {
      //namedToggle: true,
      //selectorBack: false,
      closedSymbol: '&#8862; &#x1f5c0;',
      //openedSymbol: '&#8863; &#x1f5c1;',
      //collapseAll: 'Collapse all',
      //expandAll: 'Expand all',
      collapsed: false,
    });
    lay.addTo(map);
    setBounds();
    var i = 0;
    layer_KabupatenKudus_0.eachLayer(function (layer) {
      var context = {
        feature: layer.feature,
        variables: {}
      };
      layer.bindTooltip((layer.feature.properties['Kecamatan'] !== null ? String('<div style="color: #323232; font-size: 11pt; font-family: \'Open Sans\', sans-serif;">' + layer.feature.properties['Kecamatan']) + '</div>' : ''), { permanent: true, offset: [-0, -16], className: 'css_KabupatenKudus_0' });
      labels.push(layer);
      totalMarkers += 1;
      layer.added = true;
      addLabel(layer, i);
      i++;
    });
    resetLabels([layer_KabupatenKudus_0]);
    map.on("zoomend", function () {
      resetLabels([layer_KabupatenKudus_0]);
    });
    map.on("layeradd", function () {
      resetLabels([layer_KabupatenKudus_0]);
    });
    map.on("layerremove", function () {
      resetLabels([layer_KabupatenKudus_0]);
    });
  </script>
</body>

</html>