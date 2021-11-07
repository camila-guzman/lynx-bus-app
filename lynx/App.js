import { StatusBar } from 'expo-status-bar';
import React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { CreateNativeStackNavigatior, createNativeStackNavigator } from '@react-navigation/native-stack';
import { createDrawerNavigator } from '@react-navigation/drawer';

import Home from './screens/Home';
import Routes from './screens/Routes';
import TripPlanner from './screens/Trip Planner';
import BusPasses from './screens/Bus Passes';
import Account from './screens/Account';
import Settings from './screens/Settings';
import StartUp from './screens/Start Up Page';

const Drawer = createDrawerNavigator();

export default function App() {
  return (

  <NavigationContainer>
      <Drawer.Navigator initialRouteName="HomeScreen">
      <Drawer.Screen name="Home" component={Home} />
      <Drawer.Screen name="Routes" component={Routes} />
      <Drawer.Screen name="Trip Planner" component={TripPlanner} />
      <Drawer.Screen name="Bus Passes" component={BusPasses} />
      <Drawer.Screen name="Account" component={Account} />
      <Drawer.Screen name="Settings" component={Settings} />
      </Drawer.Navigator>
   </NavigationContainer>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
