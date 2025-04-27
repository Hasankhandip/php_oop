<?php

class Fecade {
    public function findApartments($place, $divId) {
        $appfinder = new ApartmentFinder();
        $golocator = new GeoLocator();
        $gmap      = new GoogleMap();

        $apartments = $appfinder->locateApartments($place);
        foreach ($apartments as $apartment) {
            $locations[] = $geolocator->getLocations($apartment);
        }

        $gmap->initialize();
        $gmap->drawLocation($location);
        $gmap->disPatch($divId);
    }
}